<?php
include_once('config.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "update appointments set status ='approved' where patient_id = '".$id."'";
    $result = $con->query($query);
    if($result){
        echo 'Approved';
    }else{
        echo "Something Went Wrong";
    }


}