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
    <title>Register students</title>
    </head>
<body>

<?php include "navMenuAdmin.php"; ?>

  <div class="card w-25 mx-auto my-4 border-0">
    <div class="card-header bg-white border-0">
      <h1 class="h3 font-weight-light text-center"><i class="fas fa-chalkboard-teacher"></i> Register dojo student</h1>
    </div>


    <div class="card-body">
      <form action="../actions/register.php" method="post">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" class="form-control mb-2" required autofocus>
        
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control mb-2" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control mb-2" maxlength="10" required>

        <label for="course">Course</label>
        <select name="course" id="course" class="form-control mb-3" required>
          <option value="" hidden>Course</option>
          <option value="Elementary">Elementary</option>
          <option value="Junior high">Junior high</option>
          <option value="High school">High school</option>
          <option value="Adults">Adult</option>
        </select>

        <label for="times">The number of lessons</label>
        <div class="h5 text-center mb-3">
        <input type="radio" name="times" value="15" class= "mr-2">15 
        <input type="radio" name="times" value="12" class="ml-5 mr-2">12
        <input type="radio" name="times" value="10" class="ml-5 mr-2">10
        </div>


    
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control mb-2" required>

        <label for="password">Confirm Password</label>
        <input type="password" name="conPassw" id="conPassw" class="form-control mb-5" required>

        <button type="submit" class="btn btn-success btn-block">Register</button>

      </form>

    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>