<?php
    include_once('config.php');
session_start();
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$user_id = $_SESSION['id'];
if(! empty($name) && ! empty($dob) && ! empty($phone_number) && ! empty($address) && ! empty($gender)){
    $update_user = 'Update users SET name = "'.$name.'" , date_of_birth = "'.$dob.'" ,phone_number = "'.$phone_number.'" ,
    address = "'.$address.'" , gender = "'.$gender.'" where id = "'.$user_id.'"
    ';
    $result = $con->query($update_user);
    if($result){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}