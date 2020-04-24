<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="gayah.css">
    <title>Form Login</title>
</head>
<body>
<div class=login>
      <h2><i class="fas fa-sign-in-alt"></i>Form Login</h2>
      <form method="post" action="proses-login.php">
      <div class="box-login">
      <i class="fa fa-user"></i>
      <input type="text" placeholder="Username" name="username" id="" autofocus>
      </div>

      <div class="box-login">
      <i class="fa fa-lock"></i>
      <input type="password" placeholder="Password" name="password" id="">
      </div>


      <button type="submit" class="btn-login" name="btnlogin" value="Login"> Login</button>
        </br>
        <div class="regis">
        <li><a href="registrasi.php" class="keren">Registrasi</a></li>
        <li><a href="about.php" class="keren">About</a></li>
        </div>

      </div>

</body>
