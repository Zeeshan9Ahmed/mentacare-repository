<?php
include_once('config.php');

if(isset($_POST['type'])){
    $query = "select * from schedule where doctor_id = '".$_POST['doctor_id']."'";
    $result = $con->query($query);
    // print_r($_POST['doctor_id']);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            // print_r($row);
            $array[]=$row;
        }
         print_r($array);
    }
}
if(isset($_POST['doctor_id']) && isset($_POST['day'])){
    $doctor_id = $_POST['doctor_id'];
    $day = $_POST['day'];
    $startime = $_POST['start_time'];
    $endtime = $_POST['end_time'];

    $query = "Insert into schedule (doctor_id , day , start_time , end_time) values ('".$doctor_id."', '".$day."','".$startime."','".$endtime."' )";
    $result = $con->query($query);
    if($result){
        
    }
}
