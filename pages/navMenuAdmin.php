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
<title>Admin Menu</title>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-dark m-3 p-3">
    <h1 class="h1 text-weight-light text-light">booking.Dojo</h1>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse navbar-dark" id="mainNav">
   <ul class="navbar-nav ml-3">
   <li class="nav-item">
      <a href="register.php" class="nav-link">Register Student</a>
    </li>
    <li class="nav-item">
      <a href="studentList.php" class="nav-link">Student List</a>
    </li>
    <li class="nav-item">
      <a href="addLesson.php" class="nav-link">Add Lesson</a>
    </li>
    <li class="nav-item">
      <a href="lessonListAdmin.php" class="nav-link">Lesson List</a>
    </li>
    <li class="nav-item">
      <a href="allSchedule.php" class="nav-link">Schedule</a>
    </li>
   </ul>


   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <p class="text-light"> HELLO <i class="far fa-hand-paper"></i> Admin</p>
      
    </li>

    <li class="nav-item">
      <a href="adminLogout.php" type="reset" class="btn btn-outline-light ml-3">Log out</a>
    </li>
   </ul>

  </div>

  </nav>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>