<?php
//Include file koneksi ke database
include "Koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_user (username,email,password,level) values
		('$username','$email','$password','user')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

  echo '<script>alert("Berhasil daftar akun"); document.location="SignIn.php";</script>';

  

?>