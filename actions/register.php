<?php

include_once "../classes/class.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$course = $_POST['course'];
$times = $_POST['times'];
$password = $_POST['password'];
$conPassw = $_POST['conPassw'];


if($password == $conPassw){
  $password = password_hash($password, PASSWORD_DEFAULT);
  $student = new Student;
  $student->createStudent($firstName,$lastName,$username,$course, $times, $password);
} else{
  die ("Error: Password and Condfirm Password don't match!");
}