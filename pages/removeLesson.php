<?php
include_once "../classes/class.php";

$lesson = new Student;
$lesson->deleteLesson($_GET['lessonID']);