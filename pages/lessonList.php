<?php
 session_start();

 include_once "../classes/class.php";
 $lesson = new Student;
 $lessonID = $lesson->getLessonID($_SESSION['id']);
 $lessonList = $lesson->getAllLessons();
 
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

<?php include "navMenu.php" ?>

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
          <th>Book Now</th>
        </tr>
      </thead>

      <tbody>
        <?php
       while ($lessonIDList = $lessonID->fetch_assoc()) {
        while($elemenLessonDets = $lessonList->fetch_assoc()){
          echo $elemenLessonDets['id'];
          echo $lessonIDList['lesson_id'];
            // echo $elemenLessonDets['id'];
            // echo $lessonIDList['lesson_id'];
            if($elemenLessonDets['suited_age'] == 'Elementary' && $elemenLessonDets['id'] != $lessonIDList['lesson_id']){
        ?>
        <tr>
          <td><?= $elemenLessonDets['lesson_name'] ?></td>
          <td><?= $elemenLessonDets['suited_age'] ?></td>
          <td><?= $elemenLessonDets['teacher'] ?></td>
          <td><?= $elemenLessonDets['lesson_date'] ?></td>
          <td><?= $elemenLessonDets['lesson_day'] ?></td>
          <td><?= $elemenLessonDets['lesson_time'] ?></td>
          
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td><a href="booking.php?lessonID=<?= $elemenLessonDets['id'] ?>" class="btn btn-outline-primary">Book</a></td>
      
          
        </tr>

        <?php
            }
          }
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
          <th>Book Now</th>
        </tr>
    </thead>
    
    <tbody>
      <?php
          while ($lessonIDList = $lessonID->fetch_assoc()) {
        while($jhLessonDets = $lessonList->fetch_assoc()){
            echo $jhLessonDets['id'];
            echo $lessonIDList['lesson_id'];
            if ($jhLessonDets['suited_age'] == 'Junior high' && $jhLessonDets['id'] != $lessonIDList['lesson_id']) {
        ?>
        <tr>
          <td><?= $jhLessonDets['lesson_name'] ?></td>
          <td><?= $jhLessonDets['suited_age'] ?></td>
          <td><?= $jhLessonDets['teacher'] ?></td>
          <td><?= $jhLessonDets['lesson_date'] ?></td>
          <td><?= $jhLessonDets['lesson_day'] ?></td>
          <td><?= $jhLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td><a href="booking.php?lessonID=<?= $jhLessonDets['id'] ?>" class="btn btn-outline-primary">Book</a></td>
          
        </tr>
        <?php
            }
          }
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
          <th>Book Now</th>
        </tr>
     </thead>

     <tbody>
        <?php
            while ($lessonIDList = $lessonID->fetch_assoc()) {
         while($hsLessonDets = $lessonList->fetch_assoc()){
              if ($hsLessonDets['suited_age'] == 'High school' && $hsLessonDets['id'] != $lessonIDList['lesson_id']) {
        ?>
        <tr>
          <td><?= $hsLessonDets['lesson_name'] ?></td>
          <td><?= $hsLessonDets['suited_age'] ?></td>
          <td><?= $hsLessonDets['teacher'] ?></td>
          <td><?= $hsLessonDets['lesson_date'] ?></td>
          <td><?= $hsLessonDets['lesson_day'] ?></td>
          <td><?= $hsLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td><a href="booking.php?lessonID=<?= $hsLessonDets['id'] ?>" class="btn btn-outline-primary">Book</a></td>
          
        </tr>
        <?php
            }
          }
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
          <th>Book Now</th>
        </tr>
      </thead>

      <tbody>
      <?php
          while ($lessonIDList = $lessonID->fetch_assoc()) {
        while($adultLessonDets = $lessonList->fetch_assoc()){
            if ($adultLessonDets['suited_age'] == 'Adults' && $adultLessonDets['id'] != $lessonIDList['lesson_id']) {
        ?>
        <tr>
          <td><?= $adultLessonDets['lesson_name'] ?></td>
          <td><?= $adultLessonDets['suited_age'] ?></td>
          <td><?= $adultLessonDets['teacher'] ?></td>
          <td><?= $adultLessonDets['lesson_date'] ?></td>
          <td><?= $adultLessonDets['lesson_day'] ?></td>
          <td><?= $adultLessonDets['lesson_time'] ?></td>
          <td class="h2"><a href="#"><i class="fas fa-arrow-right"></i></a></td>
          <td><a href="booking.php?lessonID=<?= $adultLessonDets['id'] ?>" class="btn btn-outline-primary">Book</a></td>
          
        </tr>
        <?php
          }
         }
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