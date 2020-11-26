<?php
include_once "../classes/class.php";

$student = new Student;
$student->deleteBooking($_GET['lessonID']);
