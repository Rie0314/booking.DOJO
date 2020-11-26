<?php
include_once "../classes/class.php";

$username = $_POST['username'];
$password =$_POST['password'];

$student = new Student;
$student->login($username, $password);