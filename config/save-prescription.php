<?php
    include_once('config.php');
    if(isset($_POST['doctor_id'])){
        $doctor_id = $_POST['doctor_id'];
        $patient_id = $_POST['patient_id'];
        $prescription = $_POST['prescription'];
        $query = 'Insert Into prescription (doctor_id, patient_id , prescription) values ("'.$doctor_id.'","'.$patient_id.'","'.$prescription.'")';
        $result = $con->query($query);
        if($result){
            header("Location: ../doctor-dashboard.php?message=Prescription addedd Successfully");
        }
    }
?>