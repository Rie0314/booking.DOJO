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
    <title>Add Lesson</title>
</head>
<body>

<?php include "navMenuAdmin.php" ?>

  <div class="container w-25 mx-auto my-5">
    <div class="ard-header bg-white">
      <h1 class="h2 font-weight-light text-center"><i class="fas fa-plus"></i> Add New Lesson <i class="fas fa-clock"></i></h1>
    </div>

    <div class="card-body">
       <form action="../actions/addLesson.php" method="post">
          <label for="lessonName">Lesson Name</label>
          <input type="text" name="lessonName" id="lessonName" class="form-control mb-2" required autofocus>

          <label for="suitedAge">Suitable for</label>
          <select name="suitedAge" id="suitedAge" class="form-control mb-2" required>
            <option value="" hidden></option>
            <option value="Elementary">Elementary</option>
            <option value="Junior high">Junior high</option>
            <option value="High school">High school</option>
            <option value="Adults">Adult</option>
          
          </select>

          <label for="teacher">Teacher</label>
          <input type="text" name="teacher" id="teacher" class="form-control mb-2" required>

          <label for="date">Date</label>
          <input type="date" name="date" id="date" class="form-control mb-2" required>

          <label for="day">Day</label>
          <input type="text" name="day" id="day" class="form-control mb-2" required>

          <label for="time">Time</label>
          <input type="text" name="time" id="time" class="form-control mb-2" required>

          <div class="mt-5">
            <button type="submit" class="btn btn-success btn-md px-5">Add</button>

            <a href="#" class="btn btn-warning btn-md px-4 ml-5">Cancel</a>          
          </div>
       
       </form>
    </div>

  </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>