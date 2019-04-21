<?php
include 'resources/conect.php';
session_start();

if ($_SERVER["REQUEST_METOD"]=='POST') {
  $myusername=mysqli_real_escape_string($db,$_POST["username"]);
  $mypassword=mysqli_real_escape_string($db,$_POST["password"]);
  
  $sql="SELECT id FROM users WHERE username='$myusername' and password='$password'";

  $result=mysqli_query($db,$sql);

  $count=mysqli_num_rows($result);
  if ($count==1) {
    $_SESSION['login_user']=$myusername;
    header("location:welcome.php")
  }else{

  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIDE-FI | Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php require_once('resources/templates/header.php');?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
           
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php require_once('resources/templates/footer.php');?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
