<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){
  $nama_depan = mysqli_real_escape_string($koneksi, $_POST['nama_depan']);
  $nama_belakang = mysqli_real_escape_string($koneksi, $_POST['nama_belakang']);
  $email = mysqli_real_escape_string($koneksi,$_POST['email']);
  $pass = md5($_POST['password']);

  $select = "select * from user_form where email ='$email' && password ='$pass'";

  $reseult = mysqli_query($koneksi,$select);

  if(mysqli_num_rows($reseult) > 0){

    $row = mysqli_fetch_array($reseult);
    $_SESSION['email'] = $row['email'];
    $_SESSION['nama_depan'] =$row['nama_depan'];
    $_SESSION['status']="login";
    header("location:hal_awal.php");
  }else{
    $error[] = 'incorret email or password';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
      <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css" />
</head>
<body>
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          WELCOME TO<br />
          <span style="color: hsl(218, 81%, 75%)">DIL CAFE</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="" method="POST">
            <div class="mb-4">
            <?php 
    if (isset($error)){
      foreach($error as $error){
        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
      };
    };
    ?>
            </div>
                <div class="mb-4">
                    <h3>Iog in</h3>
                    <p>its easy</p>
                </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email"/>
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <!-- Submit button -->
              <input type="submit" class="btn btn-primary btn-block mb-4" value="Log in" name="submit">
            </input>

              <!-- Register buttons -->
              <div class="text-center">
              <p class="mb-0">Don't have account? <a href="register.php" class="text-primary-50 fw-bold">Register Now</a>
</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>