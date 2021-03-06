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
    <title>Student Login</title>
</head>
<body>

<div class="card w-25 mx-auto my-5 p-3 bg-warning text-white">
      <div class="card-header  bg-success">
        <h1 class="h3 font-weight-light text-center pt-3"><i class="fas fa-school"></i> LOGIN -student <i class="fas fa-user-graduate"></i></h1>
      </div>

      <div class="card-body">
        <form action="../actions/login.php" method="post">
          <input type="text" name="username" placeholder="USERNAME" class="form-control mt-3 mb-4" required autofocus>
          <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5" required>

          <button type="submit" class="btn btn-success btn-block">Log in</button>
        </form>
        <div class="text-center mt-3 small">
          <a href="adminLogin.php">Admin Login</a>
        </div>
      </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>