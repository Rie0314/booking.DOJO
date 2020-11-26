<?php
session_start();

include_once "../classes/class.php";
$lesson = new Student;
$allLessons = $lesson->getAllSchedule();


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
    <title>All schedule</title>
</head>
<body>

<?php include "navMenuAdmin.php" ?>

<main class="container pt-3">
  <h1 class="display-4 text-center mb-5">Scedule List <i class="fas fa-clipboard-list"></i> </h1>
    <table class="table table-hover w-100 mx-auto text-center h5 font-weight-light">

          <thead class="thead-light">
            <tr>
              <th></th>
              <th>Lesson Date</th>
              <th>Lesson Day</th>
              <th>Lesson Time</th>
              <th>Lesson Name</th>
              <th>Teacher</th>
            </tr>
          </thead>

          <tbody>
            <?php
            while($lessonDets = $allLessons ->fetch_assoc()){
            ?>
            <tr>
              <td><a href="#"><i class="far fa-laugh"></i></a></td>
              <td><?= $lessonDets['lesson_date'] ?></td>
              <td><?= $lessonDets['lesson_day'] ?></td>
              <td><?= $lessonDets['lesson_time'] ?></td>
              <td><?= $lessonDets['lesson_name'] ?></td>
              <td><?= $lessonDets['teacher'] ?></td>                
            </tr>
            <tr></tr>

            <?php
            }
            ?>

          </tbody>
    </table>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>