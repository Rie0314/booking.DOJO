<?php
 session_start();

 include_once "../classes/class.php";
 $student = new Student;
 $elemenStudent = $student->getElemenStudents();
 $jhStudent = $student->getJhStudents();
 $hsStudent = $student->getHsStudents();
 $adultStudent = $student->getAdultStudents();


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
    <title>Students List</title>
</head>
<body>

<?php include "navMenuAdmin.php" ?>

<main class="container pt-3">
<h1 class="display-4 text-center mb-5">Students List <i class="fas fa-clipboard-list"></i> </h1>
    <table class="table table-hover w-100 mx-auto text-center h5 font-weight-light">

      <thead class="thead-light">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Course</th>
          <th>Times</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php
        while($elemenStudentDets = $elemenStudent->fetch_assoc()){
        ?>
        <tr>
          <td><?= $elemenStudentDets['first_name'] ?></td>
          <td><?= $elemenStudentDets['last_name'] ?></td>
          <td><?= $elemenStudentDets['username'] ?></td>
          <td><?= $elemenStudentDets['course'] ?></td>
          <td><?= $elemenStudentDets['times'] ?></td> 
          <td>
          <a href="removeStudent.php?studentID=<?= $elemenStudentDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>               
        </tr>

        <?php
        }
        ?>

     </tbody>

    <thead class="thead-light">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Course</th>
          <th>Times</th>
          <th></th>
        </tr>
    </thead>
    
    <tbody>
      <?php
        while($jhStudentDets = $jhStudent->fetch_assoc()){
        ?>
        <tr>
          <td><?= $jhStudentDets['first_name'] ?></td>
          <td><?= $jhStudentDets['last_name'] ?></td>
          <td><?= $jhStudentDets['username'] ?></td>
          <td><?= $jhStudentDets['course'] ?></td>
          <td><?= $jhStudentDets['times'] ?></td>  
          <td>
          <a href="removeStudent.php?studentID=<?= $jhStudentDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>                 
        </tr>
        <?php
        }
        ?>
     </tbody>

     <thead class="thead-light">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Course</th>
          <th>Times</th>
          <th></th>
        </tr>
     </thead>

     <tbody>
        <?php
        while($hsStudentDets = $hsStudent->fetch_assoc()){
        ?>
        <tr>
          <td><?= $hsStudentDets['first_name'] ?></td>
          <td><?= $hsStudentDets['last_name'] ?></td>
          <td><?= $hsStudentDets['username'] ?></td>
          <td><?= $hsStudentDets['course'] ?></td>
          <td><?= $hsStudentDets['times'] ?></td> 
          <td>
          <a href="removeStudent.php?studentID=<?= $hsStudentDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>                  
        </tr>
        <?php
        }
        ?>

     </tbody>

     <thead class="thead-light">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Course</th>
          <th>Times</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
      <?php
        while($adultStudentDets =  $adultStudent->fetch_assoc()){
        ?>
        <tr>
          <td><?= $adultStudentDets['first_name'] ?></td>
          <td><?= $adultStudentDets['last_name'] ?></td>
          <td><?= $adultStudentDets['username'] ?></td>
          <td><?= $adultStudentDets['course'] ?></td>
          <td><?= $adultStudentDets['times'] ?></td>
          <td>
          <a href="removeStudent.php?studentID=<?= $adultStudentDets['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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