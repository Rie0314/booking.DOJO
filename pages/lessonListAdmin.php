<?php
 session_start();

 include_once "../classes/class.php";
 $lesson = new Student;
 $elemenLesson = $lesson->getElemenLessons();
 $jhLesson = $lesson->getJhLessons();
 $hsLesson = $lesson->getHsLessons();
 $adultLesson = $lesson->getAdultLessons();


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
    <title>Lesson List</title>
</head>
<body>

<?php include "navMenuAdmin.php" ?>

<main class="container pt-3">
<h1 class="display-4 text-center mb-5">Lesson List <i class="fas fa-clipboard-list"></i> </h1>
    <table class="table table-hover w-100 mx-auto text-center h5 font-weight-light">

      <thead class="thead-light">
        <tr>
          <th>Lesson Name</th>
          <th>Suitable for</th>
          <th>Teacher</th>
          <th>Date</th>
          <th>Day</th>
          <th>Time</th>
          <th>Details</th>
          <th></th>

        </tr>
      </thead>

      <tbody>
        <?php
        while($elemenLessonDets = $elemenLesson->fetch_assoc()){
        ?>
        <tr>
          <td><?= $elemenLessonDets['lesson_name'] ?></td>
          <td><?= $elemenLessonDets['suited_age'] ?></td>
          <td><?= $elemenLessonDets['teacher'] ?></td>
          <td><?= $elemenLessonDets['lesson_date'] ?></td>
          <td><?= $elemenLessonDets['lesson_day'] ?></td>
          <td><?= $elemenLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td>
          <a href="removeLesson.php?lessonID=<?= $elemenLessonDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>

        <?php
        }
        ?>

     </tbody>

    <thead class="thead-light">
        <tr>
          <th>Lesson Name</th>
          <th>Suitable for</th>
          <th>Teacher</th>
          <th>Date</th>
          <th>Day</th>
          <th>Time</th>
          <th>Details</th>
          <th></th>
        </tr>
    </thead>
    
    <tbody>
      <?php
        while($jhLessonDets = $jhLesson->fetch_assoc()){
        ?>
        <tr>
          <td><?= $jhLessonDets['lesson_name'] ?></td>
          <td><?= $jhLessonDets['suited_age'] ?></td>
          <td><?= $jhLessonDets['teacher'] ?></td>
          <td><?= $jhLessonDets['lesson_date'] ?></td>
          <td><?= $jhLessonDets['lesson_day'] ?></td>
          <td><?= $jhLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td>
          <a href="removeLesson.php?lessonID=<?= $jhLessonDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        <?php
        }
        ?>
     </tbody>

     <thead class="thead-light">
        <tr>
          <th>Lesson Name</th>
          <th>Suitable for</th>
          <th>Teacher</th>
          <th>Date</th>
          <th>Day</th>
          <th>Time</th>
          <th>Details</th>
          <th></th>
        </tr>
     </thead>

     <tbody>
        <?php
        while($hsLessonDets = $hsLesson->fetch_assoc()){
        ?>
        <tr>
          <td><?= $hsLessonDets['lesson_name'] ?></td>
          <td><?= $hsLessonDets['suited_age'] ?></td>
          <td><?= $hsLessonDets['teacher'] ?></td>
          <td><?= $hsLessonDets['lesson_date'] ?></td>
          <td><?= $hsLessonDets['lesson_day'] ?></td>
          <td><?= $hsLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td>
          <a href="removeLesson.php?lessonID=<?= $hsLessonDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        <?php
        }
        ?>

     </tbody>

     <thead class="thead-light">
        <tr>
          <th>Lesson Name</th>
          <th>Suitable for</th>
          <th>Teacher</th>
          <th>Date</th>
          <th>Day</th>
          <th>Time</th>
          <th>Details</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
      <?php
        while($adultLessonDets = $adultLesson->fetch_assoc()){
        ?>
        <tr>
          <td><?= $adultLessonDets['lesson_name'] ?></td>
          <td><?= $adultLessonDets['suited_age'] ?></td>
          <td><?= $adultLessonDets['teacher'] ?></td>
          <td><?= $adultLessonDets['lesson_date'] ?></td>
          <td><?= $adultLessonDets['lesson_day'] ?></td>
          <td><?= $adultLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td>
          <a href="removeLesson.php?lessonID=<?= $adultLessonDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>          
        </tr>
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