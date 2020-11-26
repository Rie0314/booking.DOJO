<?php
include_once "../classes/class.php";

$student = new Student;
$student->deleteStudent($_GET['studentID']);