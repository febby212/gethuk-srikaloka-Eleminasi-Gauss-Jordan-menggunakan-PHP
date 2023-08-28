<?php
include "db.php";
$id_barang=$_POST["id_barang"];
$singkong1=$_POST["singkong1"];
$singkong2=$_POST["singkong2"];
$singkong3=$_POST["singkong3"];
$gula1=$_POST["gula1"];
$gula2=$_POST["gula2"];
$gula3=$_POST["gula3"];
$isian1=$_POST["isian1"];
$isian2=$_POST["isian2"];
$isian3=$_POST["isian3"];

	$sql_ubah="UPDATE hitung SET
		singkong1='$singkong1',
		singkong2='$singkong2',
		singkong3='$singkong3',
        gula1='$gula1',
		gula2='$gula2',
		gula3='$gula3',
        isian1='$isian1',
		isian2='$isian2',
		isian3='$isian3'
		WHERE id_barang=$id_barang";

		
	$hasil=mysqli_query($con,$sql_ubah);
	header("Location:admubah.php");
?>