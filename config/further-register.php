<?php 
    $national_id = $_POST['national_id'];
    $phone_number = $_POST['number'];
    $emergency_number = $_POST['emergency_number'];
    $verification_code = $_POST['verification_code'];

    if(! empty($national_id) && !empty($phone_number) && ! empty($emergency_number) && ! empty($verification_code)){
        $update_query = "UPDATE users SET national_id='$national_id' , phone_number = '$phone_number' , 
        emergency_number = '$emergency_number' , is_active = '1'
         WHERE verification_code='$verification_code'";
         echo $update_query;

    }
?>