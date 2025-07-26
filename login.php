<?php
include("conf.php");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['btn'])){
    $em = $_POST['em'];
    $pass = $_POST['pass'];
    $em1 = "shayanarif787@gmail.com";
    $pass1 = 123;

    if($em == $em1 && $pass == $pass1){
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Login failed! Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Student App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fc;
    }
    .login-card {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      border-radius: 8px;
    }
    .btn-primary {
      background-color: #4e73df;
      border: none;
    }
    .btn-primary:hover {
      background-color: #2e59d9;
    }
    h4 {
      color: #4e73df;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h4 class="text-center mb-4">Student App Login</h4>
    <form method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" class="form-control" id="username" name="em" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="pass" required>
      </div>
      <input type="submit" value="Login" name="btn" class="btn btn-primary w-100">
    </form>
  </div>
</body>
</html>