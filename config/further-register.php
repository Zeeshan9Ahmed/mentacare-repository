<?php 
    include_once('config.php');
    session_start();
    $national_id = $_POST['national_id'];
    $phone_number = $_POST['number'];
    $emergency_number = $_POST['emergency_number'];
    $verification_code = $_POST['verification_code'];
    $user_id = $_POST['user_id'];
    $lat = $_SESSION['lat'];
    $lang = $_SESSION['lng'];
    
    if(empty($national_id)){
        $_SESSION['national_id'] = 'National Id field is required';
    }
    if(empty($phone_number)){
        $_SESSION['phone_number'] = 'Phone number field is required';
    }
    if(empty($emergency_number)){
        $_SESSION['emergency_number'] = 'Emergency contact field is required';
    }
    if(empty($verification_code)){
        $_SESSION['verification_code'] ='Verification Code field is required';
    }
    if(! empty($_SESSION['national_id']) || !empty($_SESSION['phone_number'])  || ! empty($_SESSION['emergency_number']) || ! empty($_SESSION['verification_code'])){
       print_r($_SESSION);
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
        
    if(! empty($national_id) && !empty($phone_number) && ! empty($emergency_number) && ! empty($verification_code) && !empty($user_id)){
        $find_query = 'Select * from users where id = "'.$user_id.'"  LIMIT 1';
        $result = $con->query($find_query);
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];
            $code = $row['verification_code'];
            if($code == $verification_code){
                $update_query ='';
                    $update_query .= "UPDATE users SET national_id='$national_id' , phone_number = '$phone_number' , 
                    emergency_contact = '$emergency_number' , is_active = '1' ";
                    
                if($role == 'doctor'){
                    $update_query .= " , latitude='$lat' , longitude = '$lang'";  
                }
                $update_query .= " WHERE id='$user_id'";
                if($con->query($update_query)){
                    unset($_SESSION['lat']);
                    unset($_SESSION['lng']);
                    unset($_SESSION['national_id']);
                    unset($_SESSION['phone_number']);
                    unset($_SESSION['emergency_number']);
                    unset($_SESSION['verification_code']);
                    if($role == 'patient'){
                        header("Location: ../patient-dashboard.php");
                    }else{
                        header("Location: ../doctor-dashboard.php");
                    }

                }else{
                    echo 'something went wrong';
                }
                
            }else{
                $_SESSION['verification_code'] = 'Verification Code does not Match';
                if(! empty($_SESSION['verification_code'])){
                    if (isset($_SERVER["HTTP_REFERER"])) {
                        header("Location: " . $_SERVER["HTTP_REFERER"]);
                    }
                }
            }
        }else{
            echo 'No user found';
        }

    }

    
?>