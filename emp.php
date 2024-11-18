<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'nouvealogin');
mysqli_select_db($con,"nouvealogin");
?>