<?php
session_start();
$koneksi = mysqli_connect ("localhost", "root", "", "login");
if(!(isset($_SESSION['id'])))
{
    header("Location: http://localhost/corona/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="tanya2.css">
    <title>Pertanyaan</title>
</head>
<body>
<div class=login>
<div class="logo">
<i class="far fa-smile-beam"></i>
    </div>
    <form method="post" action="logout.php">
</br>
      <h4>
      <?php echo $_SESSION['nama']?>, anda kemungkinan tidak terinfeksi COVID-19, kami sarankan anda untuk
      tetap berada di rumah dan selalu jaga kesehatan :)
      </h4>


<button type="submit" class="btn-login" name="btnlogin" value="logout">Check lagi</button>

      </div>
</body>
</html>