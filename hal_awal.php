<?php
include 'config.php';
session_start();
// var_dump();
if (empty($_SESSION['status'])) {
  header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="gs.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand text-warning" href="#">DIL <span class="text-light">Cafe</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-light me-5" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light me-5" href="#menu">Menu</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link text-light me-5" href="#overall">Overall</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link text-light me-5" href="#">Review</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light me-2" href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light me-2" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- home -->
    <section class="home" id="home">
      <div class="container h-100">
        <div class="row h-95">
          <div class="col-lg-6 d-flex flex-column justify-content-end content-left ya">
            <h1 class="heading text-warning">HELLO YOU WELCOME TO DIL CAFE</h1>
            <p class="subheading text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ex ab, nobis ea labore exercitationem.</p>
            <div class="btn-home">
              <a href="#" class="btn btn-buy">order now</a>
              <a href="#" class="btn btn-learn">learn more</a>
            </div>
          </div>
          <div class="col-lg-6 position-relative d-lg-flex d-sm-none">
            <img src="image/kahar.png" class="img-fluid position-absolute" alt="ini kopi " />
          </div>
        </div>
      </div>
    </section>
    <!-- menu -->
    <section class="menu section-margin" id="menu">
      <div class="container">
        <div class="row">
          <div class="col text-center" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
            <h1 class="heading">Menu</h1>
            <p class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium consectetur atque at sequi pariatur reiciendis dignissimos odio, soluta explicabo?</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
            <div class="card-menu rounded-4 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label"><i class="fa-solid fa-pot-food"></i></p>
                <h3>FOOD</h3>
                <div class="btn-menu btn mt-4">
                  <a href="pesanan.php"><i class="fa-solid fa-cart-circle-plus"></i>ORDER</a>
                </div>
              </div>
              <div class="img-menu">
                <img src="image/ramennn.png" alt="food" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
            <div class="card-menu rounded-4 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label"><i class="fa-solid fa-pot-food"></i></p>
                <h3>DRINK</h3>
                <div class="btn-menu btn mt-4">
                  <a href="pesanan.php"><i class="fa-solid fa-cart-circle-plus"></i>ORDER</a>
                </div>
              </div>
              <div class="img-menu">
                <img src="image/boba__3_-removebg-preview.png" alt="food" />
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
            <div class="card-menu rounded-4 d-flex justify-content-between align-items-center p-4">
              <div class="detail">
                <p class="label"><i class="fa-solid fa-pot-food"></i></p>
                <h3>DESSERT</h3>
                <div class="btn-menu btn mt-4">
                  <a href="pesanan.php"><i class="fa-solid fa-cart-circle-plus"></i>ORDER</a>
                </div>
              </div>
              <div class="img-menu">
                <img src="image/R__1_-removebg-preview.png" alt="food" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- overall -->
    <!-- <section class="overall" id="overall">
      <div class="container mb-3">
        <div class="row">
          <div class="col text-center" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
            <h1 class="heading">KEPUASAN</h1>
          </div>
      <div class="containerr" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="300">
        <div class="box">
          <div class="shadow"></div>
          <div class="kontent">
            <div class="percent" data-text="Puas" style="--num: 85">
              <div class="dot"></div>
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="number">
              <h2>85 <span>%</span></h2>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="shadow"></div>
          <div class="kontent">
            <div class="percent" data-text="Tidak puas" style="--num: 10">
              <div class="dot"></div>
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="number">
              <h2>10 <span>%</span></h2>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="shadow"></div>
          <div class="kontent">
            <div class="percent" data-text="-" style="--num: 5">
              <div class="dot"></div>
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="number">
              <h2>5 <span>%</span></h2>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <footer>
      <script src="bootstrap-5.2.2-dist/js/bootstrap.js"></script>
      <script src="https://kit.fontawesome.com/21689b4df0.js" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    </footer>
  </body>
</html>
<?php ?>