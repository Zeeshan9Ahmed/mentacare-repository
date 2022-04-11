<?php

include_once('config.php');
include_once('SendEmail.php');
include_once('UploadImage.php');
    session_start();
    if(isset($_POST["patient"])){
        registerUser($_POST, $con,'patient');
    }
    else{
        if(isset($_POST['doctor'])){
            registerUser($_POST,$con,'doctor');
        }
    }

    function registerUser($data,$con,$user_type){
       
        
        $password = $data['password'];
        $email = $data['email'];
        $name = $data['name'];
        $date_of_birth = $data['date_of_birth'];
        $gender = $data['gender'];
        $occupation = $data['occupation'];
        $fees = '';
        if($user_type == 'doctor'){
            $fees = $data['fees'];
        }       
        
        $verification_code = '';
        $image_name = '';
        $uploadImage = imageValidateAndUpload($_FILES);
        if(!is_array($uploadImage)){
            echo 'suucess';
       }else{
        //    echo 'ssfdf';
            $image_name = $uploadImage['image'];
       }
       
        $_SESSION['passwordErr'] = passwordValidate($password);
        $_SESSION['emailErr'] = emailValidate($email);
        if(! empty($_SESSION['passwordErr']) || ! empty($_SESSION['emailErr'])){
            echo 'somet err is there';
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }

        if(empty($_SESSION['passwordErr']) && empty($_SESSION['emailErr'])){
            
            $_SESSION['emailErr'] = checkEmailExist($email,$con);
            if(! empty($_SESSION['emailErr'])){
                if (isset($_SERVER["HTTP_REFERER"])) {
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                }
            }
            echo '<pre>';
            if(empty($_SESSION['emailErr'])){
                $insert_query = '';
                $verification_code = random_int(100000, 999999);

                if($user_type == 'patient'){
                    $insert_query = 'Insert into users (name,role,date_of_birth,gender,email,password,occupation,verification_code,avatar) values 
                    ("'.$name.'","'.$user_type.'","'.$date_of_birth.'", "'.$gender.'","'.$email.'","'.$password.'","'.$occupation.'","'.$verification_code.'","'.$image_name.'")';
                }else{
                    if($user_type == 'doctor'){
                        $speciality = $data['speciality'];
                        $insert_query = 'Insert into users (name,role,date_of_birth,gender,email,password,occupation,speciality,verification_code,fees,avatar) values 
                        ("'.$name.'","'.$user_type.'","'.$date_of_birth.'", "'.$gender.'","'.$email.'","'.$password.'","'.$occupation.'","'.$speciality.'","'.$verification_code.'","'.$fees.'","'.$image_name.'")';
                    }
                }
                if(!empty($insert_query)){
                    if( $con->query($insert_query)){
                        sendVerificationCode($email, $verification_code);
                        $id=  mysqli_insert_id($con);
                        unset($_SESSION['passwordErr']);
                        unset($_SESSION['emailErr']);
                        if($user_type == 'patient'){
                            header("Location: ../further-registration.php?id=".$id);
                        }else{
                            header("Location: ../map.php?id=".$id);
                        }
                    }
                }
            }
        }
    }

    function passwordValidate($password){
        if(empty($password)){
            return 'password is required';
        }
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
    
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        }
    }

    function emailValidate($email){
        if (empty($email)) {
           return "Email is required";
          } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return  "Invalid email format";
            }
        }
    }

    function checkEmailExist($email,$con){
        $findEmail = 'Select users.email from users where email = "'.$email.'" LIMIT 1';
        $result = $con->query($findEmail);
        if($result->num_rows > 0){
            return 'Email Already Exists';
        }

    }

    
    
    

?>