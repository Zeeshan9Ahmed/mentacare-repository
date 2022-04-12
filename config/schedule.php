<?php
include_once('config.php');
if(isset($_POST['doctor_id'])){
    $doctor_id = $_POST['doctor_id'];
    $day = $_POST['day'];
    $startime = $_POST['start_time'];
    $endtime = $_POST['end_time'];

    $query = "Insert into schedule (doctor_id , day , start_time , end_time) values ('".$doctor_id."', '".$day."','".$startime."','".$endtime."' )";
    $result = $con->query($query);
    if($result){

    }
}
