<?php
session_start();
$koneksi = mysqli_connect ("localhost", "root", "", "login");
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
<i class="fas fa-question"></i>
    </div>
</br>
      <h4>3. Apakah anda sering kesulitan dalam bernafas?
          (Kondisi kesehatan kronis yang anda alami dirasa lebih berat karena kesulitan bernafas)
      </h4>
</br>

        <div class="regis">
        <a href="jawaban3.php"><button class="iya">Iya</button></a>
        <a href="selamat.php"><button class="tidak">Tidak</button></a>
        </div>

      </div>
</body>
</html>