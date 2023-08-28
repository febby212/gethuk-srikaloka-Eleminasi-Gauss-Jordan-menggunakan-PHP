<?php

    include "db.php";
      $nama = $_POST['nama'];
      $saran = $_POST['saran'];

      $query = "INSERT INTO saran VALUES ('','$nama','$saran')";

      $hasil = mysqli_query($con,$query);

      echo "<script>alert('Termakasih atas saran anda :)'); document.location.href='saran.php';</script>";

    ?>