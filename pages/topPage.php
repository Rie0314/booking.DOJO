<?php
session_start();

if(!$_SESSION['id']){
  header("location: logout.php");
  exit;
}

include_once "../classes/class.php";

$student = new Student;
$studentProf = $student->getStudent();

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
    <title>Students Top Page</title>
</head>
<body>

<?php include "navMenu.php" ?>

  <div class="container-fluid bg-light p-5 text-white text-center">
    <a href="lessonList.php" class="btn btn-primary text-white px-5 py-4 mr-4 w-25"><i class="fas fa-arrow-right"></i> CHECK LESSON LIST <i class="fas fa-list-ol"></i></a>
    <a href="schedule.php" class="btn btn-primary text-white px-5 py-4  mr-4 w-25"><i class="fas fa-arrow-right"></i> CHECK YOUR SCHEDULE <i class="far fa-calendar-alt"></i></a>
  </div>

  <div class="container my-5">
    <table class="table table-responsive-md">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Course</th>
          <th>Times</th>
      </tr>
    </thead>

    <tbody>
        <tr>
          <td><?= $studentProf['first_name'] ?></td>
          <td><?= $studentProf['last_name'] ?></td>
          <td><?= $studentProf['username'] ?></td>
          <td><?= $studentProf['course'] ?></td>
          <td><?= $studentProf['times'] ?></td>
        </tr>

     </tbody>
 </table>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>