<?php

include_once "../classes/class.php";

$lessonName = $_POST['lessonName'];
$suitedAge = $_POST['suitedAge'];
$teacher = $_POST['teacher'];
$date = $_POST['date'];
$day = $_POST['day'];
$time = $_POST['time'];

$lessonSchedule = new Student;
$lessonSchedule->createNewLesson($lessonName, $suitedAge,$teacher, $date, $day, $time);
