<?php
session_start();

include_once "../classes/class.php";
$lesson = new Student;
$lessonDets = $lesson->getLesson($_GET['lessonID']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Booking lesson</title>
</head>
<body>

<div class="container mx-auto my-5">
    <div class="ard-header bg-white">
      <h1 class="font-weight-light text-center bg-dark text-warning p-4">Booking the Lesson below Now <i class="fas fa-bookmark"></i></h1>
    </div>

    <div class="card-body h5">
        <form action="../actions/booking.php" method="post">

        <input type="hidden" name="lessonID" value="<?= $_GET['lessonID'] ?>">

          <label for="lessonName">Lesson Name :</label>
          <p class="text-center">
          <input type="text" name="lessonName" id="lessonName" value="<?= $lessonDets['lesson_name'] ?>" class="h3 font-weight-light text-center p-3" readonly>
          </p>

          <label for="suitedAge">Suitable for :</label>
          <p class="text-center">
          <input type="text" name="suitedAge" id="suitedAge" value="<?= $lessonDets['suited_age'] ?>" class="h3 font-weight-light text-center p-3" readonly>
          </p>

          <label for="teacher">Teacher :</label>
          <p class="text-center">
          <input type="text" name="teacher" id="teacher" value="<?= $lessonDets['teacher'] ?>" class="h3 font-weight-light text-center p-3" readonly>
          </p>

          <label for="date">Date :</label>
          <p class="text-center">
          <input type="date" name="date" id="date" value="<?= $lessonDets['lesson_date'] ?>" class="h3 font-weight-light text-center pl-5 p-3" readonly>
          </p>

          <label for="day">Day :</label>
          <p class="text-center">
          <input type="text" name="day" id="day" value="<?= $lessonDets['lesson_day'] ?>" class="h3 font-weight-light text-center p-3" readonly>
          </p>

          <label for="time">Time :</label>
          <p class="text-center">
          <input type="text" name="time" id="time" value="<?= $lessonDets['lesson_time'] ?>" class="h3 font-weight-light text-center p-3" readonly>
          </p>


          <div class="float-right">
          <button type="submit" class="btn btn-warning px-4 mr-3">Book</button>
          <a href="lessonList.php" class="btn btn-outline-dark">Cancel</a>
          </div>
        </form>

  </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>