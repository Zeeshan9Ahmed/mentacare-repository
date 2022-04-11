<?php
$con = new mysqli("localhost", "root", "" , "mentcare");
$password_validation = null;
session_start();
if(isset($_POST["submit"])){
    $password_errors= NewPasswordValidate($_POST,$con);
    if(!empty($_SESSION['newPassword']) || !empty($_SESSION['oldPassword'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }else{
        if($password_errors == 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'){
            $_SESSION['newPassword'] = $password_errors;
        }
        
        if(!empty($_SESSION['newPassword'])){
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }else{
            if($password_errors == 'current Password Is Not Correct'){
                $_SESSION['oldPassword'] =$password_errors;
            }else{
                $_SESSION['newPassword'] = $password_errors;
            }
            
            if(!empty($_SESSION['oldPassword'])){
                if (isset($_SERVER["HTTP_REFERER"])) {
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                }
            }
            
            if(!empty($_SESSION['newPassword'])){
                if (isset($_SERVER["HTTP_REFERER"])) {
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                }
            }

        }
        
    }

}
function NewPasswordValidate($password,$con){
    unset($_SESSION['oldPassword']);
    unset($_SESSION['newPassword']);
    $confrim_password = $_POST['confirmpassword'];
    $oldpassword = $password['oldpassword'];
    if(empty($oldpassword)){
        $_SESSION['oldPassword'] ='password Field is required';
    }
    $password = $password['newpassword'];
    if(empty($password)){
        $_SESSION['newPassword'] = 'password Field is required';
        return 'failed';
    }

    
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
    if($password !==$confrim_password){
        return 'Password And Confrim Password Does Not Matched';
    }
    return verifyPassword($oldpassword,$password,$con);
}

function verifyPassword($oldpassword,$new_password,$con){
         $query = "Select * from users where id = '".$_SESSION['login_data']['id']."' LIMIT 1";
         $result = $con->query($query);
         $user = $result->fetch_assoc();
         if($user['password'] !== $oldpassword){
            return "current Password Is Not Correct";
         }else{
            $update_password = "update users set password='" . $new_password . "' WHERE id='" . $_SESSION['login_data']['id'] . "'";
            if($con->query($update_password)){
                if (isset($_SERVER["HTTP_REFERER"])) {
                    unset($_SESSION['newPassword']);
                    unset($_SESSION['oldPassword']);
                    $_SESSION['suceess'] = 'Password Updated Successfully';
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                    
                }
            }            
         }


    
}