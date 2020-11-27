<?php
session_start();

include_once "../classes/class.php";
$students = new Student;
$registeredStudents = $students->getAllRegStudents($_GET['lessonID']);

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
  <h1 class="display-4 text-center mb-5">Student List <i class="fas fa-clipboard-list"></i> </h1>
    <table class="table table-hover w-100 mx-auto text-center h5 font-weight-light mt-5">

          <thead class="thead-light">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Course</th>
            </tr>
          </thead>

          <tbody>
            <?php
            while($studentList = $registeredStudents->fetch_assoc()){
            ?>
            <tr>
              <td><?= $studentList['firstName'] ?></td>  
              <td><?= $studentList['lastName'] ?></td>   
              <td><?= $studentList['course'] ?></td>
                  
            </tr>

            <?php
            }
            ?>

          </tbody>

          <a href="allSchedule.php" class="btn btn-outline-dark">BACK</a>
    </table>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>