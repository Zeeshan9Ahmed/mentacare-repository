<?php
include_once('config.php');
session_start();
$date = date("Y-m-d", strtotime($_POST['date']));
$time = date("h:i:sa", strtotime($_POST['date']));

$make_appointment = "Insert Into appointments (patient_id , doctor_id ,  booking_date , booking_time , amount , status) values 
('".$_SESSION['login_data']['id']."', '".$_SESSION['doctor_id']."' ,'".$date."','".$time."' ,'".$_SESSION['fees']."','pending')";
echo $make_appointment;
if($con->query($make_appointment)){
    unset($_SESSION['doctor_id']);
    unset($_SESSION['fees']);
    header("Location: ../patient-dashboard.php");

}else{
    echo 'fdsf';
}