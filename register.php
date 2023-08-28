<?php

include "db.php";
  $username = $_POST['username'] ?? '';
  $email = $_POST['email'] ?? '';
  $no_hp = $_POST['no_hp'] ?? '';
  $password = $_POST['password'] ?? '';

  $query = "INSERT INTO regis VALUES ('','$username','$email','$no_hp', '$password')";

  $hasil = mysqli_query($con,$query);

  echo "<script>alert('Anda sudah terdaftar. Silahkan Login'); document.location.href='login.php';</script>";

?>