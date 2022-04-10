<?php
session_start();
unset($_SESSION["login_data"]);
header("Location:login.php");
?>