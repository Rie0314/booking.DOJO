<?php
 session_start();

 include_once "../classes/class.php";
 $studentID = $_SESSION['id'];
 $schedule = new Student;
 $eachSchedule = $schedule->getSchedule($studentID);
 
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
<title>Schedule</title>
</head>
<body>

<?php include "navMenu.php" ?>

<main class="container pt-3">
  <h1 class="display-4 text-center mb-5"> Schedule <i class="fas fa-clipboard-list"></i></h1>
  <table class="table w-100 mx-auto text-center h5 font-weight-light">

      <thead class="thead-light">
              <tr>
                <th>Lesson Name</th>
                <th>Suitable for</th>
                <th>Teacher</th>
                <th>Date</th>
                <th>Day</th>
                <th>Time</th>
                <th></th>
              </tr>
      </thead>

      <tbody>

      <?php
        while($scheduleDets = $eachSchedule->fetch_assoc()){
        ?>

      <tr>
          <td><?= $scheduleDets['lesson_name'] ?></td>
          <td><?= $scheduleDets['suited_age'] ?></td>
          <td><?= $scheduleDets['teacher'] ?></td>
          <td><?= $scheduleDets['lesson_date'] ?></td>
          <td><?= $scheduleDets['lesson_day'] ?></td>
          <td><?= $scheduleDets['lesson_time'] ?></td>
          <td>
          <a href="removeBook.php?lessonID=<?= $scheduleDets['id'] ?>" class="btn btn-danger btn-sm">Cancel</a>
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