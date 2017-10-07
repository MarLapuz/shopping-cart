<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Customer'){
  $dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
  mysqli_select_db($dbconnect, "u810519564_giga");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GigaGames | Home</title>
  <link rel="shortcut icon" type="image/x-icon" href="image-resources/headerlogo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="preloader"></div>
  <div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid navbar-border">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <h4><a class="soledph" href="/../resources/views/cart/index.php"><img src="image-resources/headerlogo.png" height="20px;"> GIGAGAMES</a></h4>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="/../public"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products</a></li>
            <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
         <li><a href="#" class="soledph">Hi <?php echo ucfirst($_SESSION['Username']);?></a></li>
         <li><a href="logout.php">LOGOUT <span class="glyphicon glyphicon-log-out"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div><br><br>

  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide carousel-fade" data-interval="7000" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="carousel/game1.jpg">
          <div class="carousel-caption show-lg hidden-xs hidden-sm hidden-md">
            <div align="left">
          <button type="button" data-animation="animated fadeInLeft" class="btn btn-info carousel-text">INTENSE</button>
              <span class="btn carousel-text" data-animation="animated fadeInUp">GAMING</span><br><br>
              <br><br>
              </div>
          </div>
        </div>

        <div class="item">
          <img src="carousel/game2.jpg">
          <div class="carousel-caption show-lg hidden-xs hidden-sm hidden-md">
          <div align="center">
          <button type="button" data-animation="animated fadeInLeft" class="btn btn-info carousel-text">POWERFUL</button>
              <span class="btn carousel-text" data-animation="animated fadeInUp">BLITZ</span><br><br>
              <br><br>
              </div>
          </div>
        </div>

        <div class="item">
          <img src="carousel/game3.jpg">
          <div class="carousel-caption show-lg hidden-xs hidden-sm hidden-md">
          <div align="right">
          <button type="button" data-animation="animated fadeInLeft" class="btn btn-info carousel-text">EXPERIENCE</button>
              <span class="btn carousel-text" data-animation="animated fadeInUp">THE UNDERWORLD</span><br><br>
              <br><br>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
 
  <div align="center" class="container-fluid bg-red"><br>
    <h1 class="phrase">C H O O S E&nbsp;&nbsp;&nbsp;Y O U R&nbsp;&nbsp;&nbsp;C O N S O L E</h1><br>
  </div>
  <div class="container-fluid div-games"><br><br>
  <div class="container">
    <div class="row">
      <div align="center" class="col-lg-4 show-lg hidden-xs hidden-sm hidden-md">
        <img src="image-resources/XBOX.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2s" height="200px;">
        <a href="/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn" data-wow-duration="2s"><strong>XBOX ONE</strong></h2>
        </a>
      </div>
      <div align="center" class="col-lg-4 hidden-lg show-xs show-sm show-md">
        <img src="image-resources/XBOX.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2s" height="150px;">
        <a href="/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn" data-wow-duration="2s"><strong>XBOX ONE</strong></h2>
        </a>
      </div>

      <div align="center" class="col-lg-4 show-lg hidden-xs hidden-sm hidden-md">
        <img src="image-resources/PS3.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2.5s" data-wow-duration="2.5s"
          height="200px;">
        <a href="wo/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn"><strong>PS3</strong></h2>
        </a>
      </div>
      <div align="center" class="col-lg-4 hidden-lg show-xs hidden-sm show-md">
      <img src="image-resources/PS3.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2.5s" data-wow-duration="2.5s"
          height="150px;">
        <a href="/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn" data-wow-duration="2s"><strong>PS3</strong></h2>
        </a>
      </div>

      <div align="center" class="col-lg-4 show-lg hidden-xs hidden-sm hidden-md">
        <img src="image-resources/PS4.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="3s" data-wow-duration="3s"
          height="200px;">
        <a href="/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn"><strong>PS4</strong></h2>
        </a>
      </div>
      <div align="center" class="col-lg-4 hidden-lg show-xs hidden-sm show-md">
      <img src="image-resources/PS4.jpg" alt="" class="wow fadeIn img-rounded games" data-wow-duration="3s" data-wow-duration="3s"
      height="170px;">
        <a href="/../cart/public/index.php" class="size">
          <h2 align="center" class="gigagames zoom wow bounceIn" data-wow-duration="2s"><strong>PS4</strong></h2>
        </a>
      </div>
    </div>
  </div><br><br><br>

  <div class="container-fluid bg-white">
    <div class="row">
      <div align="center" class="col-lg-4">
        <h2 align="center" class="gigagames wow fadeInLeft" data-wow-duration="1.5s">New Released Games</h2>
        <hr class="hr-short">
        <p align="center" class="gigagames">1.) Fallout 4 <br> 2.) The Elder Scrolls V: Skyrim Special Edition <br> 3.) ARK: Survival Evolved <br> 4.) Destiny <br> 5.) The Witcher 3: Wild Hunt </p>
      </div>
      <div align="center" class="col-lg-4">
        <h2 align="center" class="gigagames wow fadeInDown" data-wow-duration="1.5s">Most Played Games</h2>
        <hr class="hr-short">
        <p align="center" class="gigagames">1.) Mass Effect: Andromeda <br> 2.) Dark Souls III <br> 3.) Call of Duty: WWII <br> 4.) Mass Effect: Andromeda <br> 5.) Marvel vs. Capcom: Infinite </p>
      </div>
      <div align="center" class="col-lg-4">
        <h2 align="center" class="gigagames wow fadeInRight" data-wow-duration="1.5s">Upcoming Games</h2>
        <hr class="hr-short">
        <p align="center" class="gigagames">1.) FIFA 18 <br> 2.) WRC 7 <br> 3.) Gundam Versus <br> 4.) Minecraft: Story Mode - Season Two: The Telltale Series <br> 5.) Pinball FX3 </p>
      </div>
    </div>
  </div>
  <br><br>

  <div class="container">
    <h1 class="soledph">ABOUT GIGAGAMES</h1><hr align="left" class="hr-short">
    <h4>This website was made by <a href="http://www.arlancabuso.com" target="_blank">Arlan Cabuso</a>, <a href="http://www.marlapuz.com" target="_blank">Lapuz Mar Michael</a>, and <a href="http://www.amielseverino.com" target="_blank">Severino Shernon Amiel</a>. It is only a fictional website made for their project in WEBTECH3 and this website will not affect any of your accounts and personal data. GigaGames is a website selling the latest and most featured games where in you can select your game and add it to your cart to pay later with a payment method of paypal. GigaGames is also made with the use of bootstrap for its responsiveness to other devices and it has a high level of validation when it comes to forms.</h4>
  </div><br>
  </div>

  <div align="center" class="container-fluid bg-red"><br>
    <h3 class="phrase"><strong>CHANGE THE WAY YOU PLAY | G I G A G A M E S</strong></h3><br>
  </div>
  <footer class="container-fluid">
    <div class="container">
      <div class="row soledph"><br>
        <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
          <h4><strong>CONTACT CUSTOMER CARE</strong></h4>
          <p>(+639) 912-345-6789</p>
          <p>Open Daily : 10:00am - 9:00pm</p>
          <p>support@gigagames</p>
        </div>
        <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
          <h4><strong>@GIGAGAMES</strong></h4>
          <a href="#" class="soledph">https://wwww.fb.com/giga.games</a>
          <a href="#" class="soledph">https://www.twitter.com/@gigagames</a>
          <a href="#" class="soledph">https://wwww.instagram/gigagames</a>
          <a href="#" class="soledph">GigaGames@gmail.com</a>
        </div>
        <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
          <h4><strong>FIND US</strong></h4>
          <p>812 Broadway</p>
          <p>Angeles City, AC 1003</p>
          <p>@ 11th &amp; 12th</p>
        </div>
        <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
          <br><br>
          <p>535 N Fairfax Ave</p>
          <p>San Fernando City, SF 90036</p>
          <p>@ Rosewood</p>
        </div>
      </div><br><br>
      <h5 align="center" class="soledph">&copy; ALL RIGHTS RESERVED GIGAMES 2017</h5>
    </div>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascript/wow.min.js"></script>
<script>
  jQuery(window).load(function () {
    jQuery(".preloader").delay(1000).fadeOut("slow");
  });
</script>
<script type="text/javascript">
  new WOW().init();
  var wow = new WOW({
    boxClass: 'wow', // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0, // distance to the element when triggering the animation (default is 0)
    mobile: true, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function (box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  });
  wow.init();
</script>
<noscript>
  <style>
    .preloader {
      display: none;
    }
  </style>
</noscript>

</html>
<?php
}
 else{
    header("location: login.php");
     }
    ?>