<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Beau</title>
</head>
<body>
  <div class="wrapper">
    <header class="main-heading">
      <nav class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">about us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">reservation</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">our menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">our blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> location</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="hero">
        <div class="container text-center p-4">

          <img src="./img/hero-iphone.png" alt="app view" width="400" class="img-fluid">
    
          <h1 class="p-5">COMING SOON</h1>
    
          <p>Have no fear, we are launching soon. <br>
          We just have to dot the i's and cross the t's</p>
        
          <div class="p-3">
            <form action="form.php" method="POST" id="form">
              <input type="email" name="email" id="email" class="form-contol" placeholder="Enter your email" required autofocus>
              <input type="submit" data-submit="...sending" value="Join the waiting list">
            </form>
          </div>
        
        </div>
      </div>
    </header>

    <section class="brief1">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6">
            <img src="./img/makeup-artist.png" alt="MAKEUP" class="img-fluid">
          </div>
          <div class="col-lg-6 align-self-center text-center">
            <h3>WANT AN <span>IDEA</span> OF THE BEST <br>
              MAKEUP FOR YOUR FACE <br>
            <span>WITHOUT</span> GOING TO THE <br>
              <span>MAKEUP ARTIST</span> FOR
              EXPERIMENTAL TRIALS</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="brief2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center text-center">
            <h3>WANT AN <span>IDEA</span> OF THE BEST <br>
            <span>HAIRSTYLE</span> FOR YOUR FACE <br>
            <span>WITHOUT</span> GOING TO THE <br>
              <span>BARBER</span> FOR
              EXPERIMENTAL TRIALS</h3>
          </div>
          <div class="col-lg-6">
            <img src="./img/barber.png" alt="Hair cut" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="brief1">
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-5">
            <h5>FEATURES</h5>
            <h3 class="py-4">The Perfect Beauty Assistant</h3>
            <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Proin suspendisse purus purus risus fames proin dapibus ac. 
              Rhoncus ac gravida eu, ac, facilisi turpis aenean commodo arcu.</p>
          </div>
          <div class="col-lg-7">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="features my-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 my-4">
            <img src="./img/iphone-feat.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
        </div>
      </div>
    </section>

  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>