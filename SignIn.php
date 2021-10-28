<?php
  session_start();
  include 'Koneksi.php';
?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="SignIn.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <title>BONAFIDE</title>

  </head>
  <body>
  <nav class="navbar nav2 navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images\lgbonafide.png" style="width: 25%"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/facebook--v1.png" width = "25" height = "25" class="d-inline-block align-text-right"/></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/instagram-new.png" width = "25" height = "25" class="d-inline-block align-text-right"/></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="SignIn.php">LoginPage</a>
              </li>
              <a class="btn tombol-button-register text-dark" href="Register.php" role="button">Register</a>
            </ul>
          </div>
        </div>
      </nav>
  <!-- Akhir Navbar -->

  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>  
<div class="container">
      <div class="row content">
      <center>  
      <h2 class="judul-login mt-1 mb-5">Bonafide</h2>
      </center>
          <div class = "col-md-6 mb-3">
              <img src="Images/Login.svg" class="img-fluid" alt="image">
          </div>
          <div class = "col-md-6">
              <h3 class="signin-text mb-3">Sign In</h3>
              <form action = "cek_index.php" method = "post">
                  <div class="form-group">
                      <label for = "user">Email</label>
                      <input type = "email" name = "email" class = "form-control" required>
                  </div>
                  <div class = "form-group">
                      <label for ="password">Password</label>
                      <input type = "password" name = "password" class = "form-control" required>
                  </div>
                  <div class = "form-group form-cheeck">
                      <input type ="checkbox" name = "checkbox" class = "form-cehck-input" id="checkbox" required>
                      <label class = "form-check-label" for = "checkbox">Remember Me</label>
                  </div>
                  <input class = "btn btn-class rounded-pill" type  = "submit" name = "login" value = "Login"> 
              </form>
          </div>
        </div>
    </div>                   