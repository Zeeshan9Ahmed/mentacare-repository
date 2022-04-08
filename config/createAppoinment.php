<?php
include_once('config.php');
session_start();
echo '<pre>';
print_r($_SESSION);
$date = date("Y-m-d", strtotime($_POST['date']));
$time = date("h:i:sa", strtotime($_POST['date']));
echo $date;

$make_appointment = "Insert Into appointments (patient_id , doctor_id , date , time , amount , status) values 
('".$_SESSION['login_data']['id']."', '".$_SESSION['doctor_id']."' ,'".$date."','".$time."' ,'".$_SESSION['fees']."','pending')";

if($con->query($make_appointment)){
    header("Location: ../patient-dashboard.php");

}else{
    echo 'fdsf';
}