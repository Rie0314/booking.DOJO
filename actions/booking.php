<?php
session_start();
include_once "../classes/class.php";

$lessonID = $_POST['lessonID'];
$studentID = $_SESSION['id'];


$lessonSchedule = new Student;
$lessonSchedule->createSchedule($studentID, $lessonID);
