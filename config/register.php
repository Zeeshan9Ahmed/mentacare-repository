<?php

    include_once('config.php');

    if(isset($_POST["patient"])){
        $sql = "INSERT INTO users (`name`,`role`,`date_of_birth`,`gender`,`email`,`password`,`occupation`)VALUES
         ('".$_POST['name']."','patient','".$_POST['date_of_birth']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['password']."','".$_POST['occupation']."')";
 
        if ($con->query($sql) === TRUE) {
        	header("Location: ../login.php");

        } else {
        echo "Error: " . $sql . "<br>" . $cnn->error;
        }
    }

    elseif(isset($_POST["doctor"])){
        $sql = "INSERT INTO users (`name`,`role`,`date_of_birth`,`gender`,`email`,`password`,`speciality`,`doctor_id`)VALUES
        ('".$_POST['name']."','doctor','".$_POST['date_of_birth']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['password']."','".$_POST['speciality']."','".$_POST['doctor_id']."')";

       if ($con->query($sql) === TRUE) {
        header("Location: ../login.php");
       } else {
       echo "Error: " . $sql . "<br>" . $con->error;
       }
    }
    else{
        echo "wrong form selection";
    }

    if(isset($_POST['further-register'])){
        echo 'dfashf';
    }

?>