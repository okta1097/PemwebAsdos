<!DOCTYPE html>
<html>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<head>
	<title>Dealer  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

     <link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Bayerische Motoren Werke</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="models.php">Models</a>
              </li>
               <li class="nav-item cta">
                <a class="nav-link" href="admin.php"><span>Admin</span></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(src/adaw1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>BMW ON THE SOCIAL WEB</h1>
              <p>Become part of the BMW community.</p>
              
            </div>

          </div>
        </div>
      </div>
    </section>
 

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
          </div>
        </div>
      </div>
    </section>

   
  <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Group </h3>
            <p> 1 laki 2 perempuan.</p>
            <p class="lead"><a href="tel://">OKTA RINNALDO</a></p>
			<p class="lead"><a href="tel://">ELISA APRILYANTI</a></p>
			<p class="lead"><a href="tel://">FITRI HANDAYANI</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="https://www.facebook.com/elisaaprilyanti" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="https://twitter.com/oktarinnaldoo" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="https://www.instagram.com/oktarinnaldoo/" class="p-3"><span class="fa fa-instagram"></span></a>
              
            </p>
          </div>
          <div class="col-md-4">
            <h3>Address</h3>
            <p>Jalan Sakura , Perum . Bataranila Blok D No 81 , Hajimena , Lampung Selatan </p>
           
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
			<p> Support by, Kontrakan Squad </p>
            <p> “Pegang tanganku, tapi jangan terlalu erat, karena aku igin seiring dan bukan digiring.” </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
 
	
	
 
 
</body>
</html>