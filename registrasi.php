<?php 
$koneksi = mysqli_connect("localhost", "root", "","login");
if(isset($_POST["submit"])){
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];

$query = ("INSERT INTO user VALUES ('','$nama','$username','$password') ");
$sql = mysqli_query($koneksi,$query);
//var_dump($siswa);
if($sql>0){
    echo
    "
    <script>
   alert('Berhasil Registrasi');
   document.location.href='login.php';

    </script>
    ";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="gayar.css">
    <title>Form Registrasi</title>
</head>
<body>

<div class=login>
      <h2><i class="fas fa-sign-in-alt"></i>Form Registrasi</h2>
      <form method="post" action="">

      <div class="box-login">
      <i class="fas fa-address-card"></i>
      <input type="text" placeholder="Nama" name="nama" id="" autofocus>
      </div>

      <div class="box-login">
      <i class="fa fa-user"></i>
      <input type="text" placeholder="Username" name="username" id="">
      </div>

      <div class="box-login">
      <i class="fa fa-lock"></i>
      <input type="password" placeholder="Password" name="password" id="">
      </div>


      <button type="submit" class="btn-login" name="submit" value="Registrasi">Registrasi</button>
      </div>


<!-- <center>
<form action="" method="post">
    <h1>Form Registrasi</h1>
    <br>
<table class="tabel">
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" autofocus required></td>
    </tr>
    
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username" required></td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td><input type="text" name="password" required></td>
</tr>

<tr>
<td><button type="submit" class="btn-login" name="submit" value="Regristrasi">Registrasi</button></td>
</tr>

</table>
</form>
    </center> -->
</body>
</html>