<?php
    include_once('config.php');
    include_once('UploadImage.php');
session_start();
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone_number = $_POST['phone_number'];
// $address = $_POST['address'];
$gender = $_POST['gender'];
$user_id = $_SESSION['login_data']['id'];
$image_name = '';
    
if(!empty(($_FILES['fileToUpload']['name']))){
    $uploadImage = imageValidateAndUpload($_FILES);
    if(!is_array($uploadImage)){
        echo 'suucess';
   }else{
    //    echo 'ssfdf';
        $image_name = $uploadImage['image'];
   }
    // imageValidateAndUpload($_FILES);
}
if(! empty($name) && ! empty($dob) && ! empty($phone_number)  && ! empty($gender)){
    $update_user = '';
    $update_user .= 'Update users SET name = "'.$name.'" , date_of_birth = "'.$dob.'" ,phone_number = "'.$phone_number.'" ,
     gender = "'.$gender.'" 
    ';
    if($image_name){
        $update_user .= ' ,avatar = "'.$image_name.'"';
    }
    $update_user .= ' where id = "'.$user_id.'"';
    echo $update_user;
    // exit;
    $result = $con->query($update_user);
    print_r($result);
    if($result){
        $qeury = 'Select * from users where id = "'.$user_id.'" LIMIT 1';
        $user = $con->query($qeury);
        if($user){
            $row = $user->fetch_assoc();
            $_SESSION['login_data']['data'] =$row;
        }
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}