<?php
session_start();
include_once("../config/config.php");

    if(isset($_POST["update-doctor"])){
        
         $id = $_SESSION["id"];
        
         $name = $_POST['name'];
         $gender = $_POST['gender'];
         $fees = $_POST['fees'];
         $specialist = $_POST['specialist'];
         $clinic_name = $_POST['clinic-name'];
         $clinic_address = $_POST['clinic-address'];
       
        
          $sql = "UPDATE users SET
          `name`='$name',
          `gender`='$gender', 
          `fees`='$fees', 
          `speciality`='$specialist' 
          WHERE id=".$id;

         if ($con->query($sql) === TRUE) {
             $sql1 = "UPDATE clinics SET
          `name`='$clinic_name' ,
          `address`='$clinic_address' 
            WHERE `user_id`=".$id;
            
            if($con->query($sql1) === TRUE){
                header('Location: ../doctor-profile-settings.php');
            }
           
         } else {
           echo "Error updating record: " . $con->error;
         }
        
    }
    else if(isset($_POST["update-user"])){
        echo "update user";
    }

?>