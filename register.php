<?php 
include_once('connection.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($username,$email,$nama,$gender,$alamat,$password))
    {
      header('location:login.php');
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" >
    <title>Quiz PWEB</title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">difue Hijab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

      </ul>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
    </div>
  </div>
</nav>


  <div class="container-md">
    <br>
    <div>
      <h1>Register</h1>
      <form method="post" action="">
          <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
              <input type="text" class="form-group col-md-4" id="username" name="username" required >
          </div>
          </div>

          <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
              <input type="text" class="form-group col-md-4" id="email" name="email" required>
          </div>
          </div>
      
          <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
              <input type="text" class="form-group col-md-4" id="nama" name="nama" required>
          </div>
          </div>

          <div class="form-group row">
          <label for="gender" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-10">
              <input type="text" class="form-group col-md-4" id="nim" name="gender" required>
          </div>
          </div>

          <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
              <input type="text" class="form-group col-md-4" id="prodi" name="alamat" required>
          </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
              <input type="password" class="form-group col-md-4" id="password" name="password" required >
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10">
              <a href="login.php" class="btn btn-success">Login</a>
              <button type="submit" class="btn btn-primary" name="register">Register</button>
              </div>
          </div>
          </form>
          <img class="gambar1" src="gambar/gambar 1.jpeg" alt="kerudung difue hujab" width="600">
          
    </div>    
  </div>
    <script src="js/bootstrap.js" ></script>
    <script src="js/popper.min.js"></script>
</body>
</html>