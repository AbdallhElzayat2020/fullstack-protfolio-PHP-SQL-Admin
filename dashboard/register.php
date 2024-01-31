<?php
     include "libraryback/user.php";
     if (isset($_POST['name'])) {
          $errors = [];
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          
          if (empty($name)) {
               $errors[] = "username is required";
          }
          if (empty($email)) {
               $errors[] = "email is required";
          }
          if (empty($password)) {
               $errors[] = "password is required";
          }
          if (empty($errors)) {
               $res = register($name , $email , $password);
          }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./dashboardFront/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./dashboardFront/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dashboardFront/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h3> Register Page</h3>
             <?php if ( !empty($errors)): ?>
                 <div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                     <ul>
                          <?php foreach ($errors as $error): ?>
                              <li>
                                   <?= $error ;?>
                              </li>
                          <?php endforeach; ?>
                     </ul>
                 </div>
             <?php endif; ?>
        </div>
        <div class="card-body">
            <form action="register.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="UserName">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
            <div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->
            <p class="mb-0">
                <a href="login.php" class="text-center">if you Have Account Login</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./dashboardFront/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./dashboardFront/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboardFront/dist/js/adminlte.min.js"></script>
</body>
</html>

