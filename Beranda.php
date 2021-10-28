<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="Styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>Beranda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/25/000000/instagram-new.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><img src="https://img.icons8.com/ios-filled/25/000000/facebook.png"/></a>
          </li> 
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="btn tombol-login rounded-pill" aria-current="page" href="SignIn.php"><img src="images\user.svg"></a>
            </li>
            <li class="nav-item">
              <a class="btn tombol-login rounded-pill" aria-current="page" href="#"><img src="images\search.svg"></a>
            </li>
            <li class="nav-item">
              <a class="btn tombol-login rounded-pill" aria-current="page" href="#"><img src="images\shopping.svg"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar nav2 navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images\lgbonafide.png" style="width: 25%"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Collections
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Testimoni</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel1 carousel-item active">
      <div class="jumbotron p-5 mb-4">
        <div class="row">
          <div class="col-md-6">
        <div class="text container-fluid py-5">
          <h1 class="display-5 fw-bold">Dompet Kulit</h1>
          <p class="col-md-8 fs-5">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>
      <div class="col-md-6 mt-6">
        <img src="images\dompetsapi.png" class="dompetsapi d-block w-100" alt="...">
      </div>
        </div>
      </div>
        </div>
      <div class="carousel2 carousel-item">
        <div class="jumbotron p-5 mb-4 bg-light rounded-3">
          <div class="row">
            <div class="col-md-6">
          <div class="text container-fluid py-5">
            <h1 class="display-5 fw-bold">Tas Kulit</h1>
            <p class="col-md-8 fs-5">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
          </div>
        </div>
        <div class="col-md-6 mt-6">
          <img src="images\tas.png" class="tas d-block w-100" alt="...">
        </div>
          </div>
          </div>
        </div>
        <div class="carousel2 carousel-item">
          <div class="jumbotron p-5 mb-4 bg-light rounded-3">
            <div class="row">
              <div class="col-md-6">
            <div class="text container-fluid py-5">
              <h1 class="display-5 fw-bold">Sandal Kulit</h1>
              <p class="col-md-8 fs-5">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
              <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
          </div>
          <div class="col-md-6 mt-6">
            <img src="images\sandal.png" class="sandal d-block w-100" alt="...">
          </div>
            </div>
            </div>
          </div>
          <div class="carousel2 carousel-item">
            <div class="jumbotron p-5 mb-4 bg-light rounded-3">
              <div class="row">
                <div class="col-md-6">
              <div class="text container-fluid py-5">
                <h1 class="display-5 fw-bold">Sabuk Kulit</h1>
                <p class="col-md-8 fs-5">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
              </div>
            </div>
            <div class="col-md-6 mt-6">
              <img src="images\ikatsapi.png" class="sabuk d-block w-100" alt="...">
            </div>
              </div>
              </div>
            </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!--Text Sertifikasi-->
  <center>
  <section id="Judul" class="Judul">
    <div class="container">
      <div class="row pt-5 mb-5">
        <div class="col">
          <h2 class="Judul"> Bonafide </h2>
        </div>
      <br>
      <div class="Isi">
        <p>Bonafide merupakan toko pengrajin kulit yang berada di kota magetan. <br>
          Bonafide akan berkomitmen dalam hal meningkatkan pemasaran baik kualitas maupun kuantitas<p>
      </div>
    </div>
    </section>
  </center>

  <!-- End Text -->

  <center>
  <!-- Card Sertifikasi -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="Sertifikasi h-100">
          <img src="images/bookmark.svg" width="100" height="100"/>
          <div class="Sertifikasi-body"><br>
            <h5>Premium Quality</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="link h-100">
          <img src="images/payment.svg" width="100" height="100"/>
          <div class="link-body"><br>
            <h5>Easy Payment</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="SDM h-100">
          <img src="images/return.svg" width="100" height="100">
          <div class="SDM-body"><br>
            <h5>Free Return & Exchange</h5>
          </div>
        </div>
      </div>
    </div>
    </div>
    </center>
    <!-- End Card -->

    <center>
      <section id="Judul" class="grupsandal">
        <div class="container">
          <div class="row pt-5 mb-5">
            <div class="col">
              <h2 class="Judul"> Sandal Kulit </h2>
            </div>
        
          <br>
        </section>
      </center>
          <div class="container product mb-5 mt-5">
            <div class="row">

    
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-center">
                    <img src="images\sandal.png" alt="" class="rounded text-light" width="160">
                    <h5>SANDAL ZEINTIN KK 98</h5>
                    <div class="cost mt-3 text-dark">
                      <span>Rp.50.000</span>
                    </div>
                  </div>
            

                  <a class="btn keranjang" href="#" role="button">Lihat Produk</a>
                </div>
              </div>
          
              <!-- Card 2 -->
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-center">
                    <img src="images\sandal1.png" alt="" class="rounded" width="160">
                    <h5>SANDAL KULIT </h5>
                    <div class="cost mt-3 text-dark">
                      <span>Rp.50.000</span>
                    </div>
                  </div>
                  <!-- {{-- Button For Cards --}} -->
                <!-- {{-- Button For Cards --}} -->
                <a class="btn keranjang" href="#" role="button">Lihat Produk</a>
                </div>
              </div>
              <!-- {{-- Card3 --}} -->
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-center">
                    <img src="images\sandal2.png" alt="" class="rounded" width="160">
                    <h5>SANDAL PRO ACTION KING</h5>
                    <div class="cost mt-3 text-dark">
                      <span>Rp.50.000</span>
                    </div>
                  </div>
                  <!-- {{-- Button For Cards --}} -->
                <!-- {{-- Button For Cards --}} -->
                <a class="btn keranjang" href="#" role="button">Lihat Produk</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Jumbotron 1 -->
          <center>
          <div class="jumbotron jumb1 p-5 mb-5">
            <div class="text text-light container-fluid py-5">
              <h1 class="display-6 fw-bold mb-4">Kulit Berbahan Kualitas Terbaik</h1>
              <p class="col-md-8 fs-5">Semuanya dimulai dengan tangan terampil pengrajin kami yang secara harmonis memilih dan memotong kulit yang dibutuhkan untuk setiap sepatu atau tas. Sebuah tugas yang sangat rumit dan tepat, membutuhkan banyak pengalaman dan dedikasi.</p>
            </div>
            </div>
          </center>
          <!-- End Jumbotron -->

          <!-- Footer -->
    <footer class="bg-dark text-center text-white p-4">
    <!-- Section: Form -->
    <section class="">
      <img class="bonafide pb-4" src="images/lgbonafide.png" width="500px">
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Accounts</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="!" class="text-white">Register</a>
            </li>
            <li>
              <a href="#" class="text-white">Login</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>