<?php

$adminName = $_POST['adminName'];
$password =$_POST['password'];

if($adminName == "DojoAdmin0314" && $password == 12345678910){
    header("location: ../pages/register.php");
    exit;
  } else{
  echo "Error: username or password is incorrect";
}