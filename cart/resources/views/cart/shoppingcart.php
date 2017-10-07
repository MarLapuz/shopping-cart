<?php include 'facebook.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GIGAGAMES</title>
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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <h4><a class="soledph" href="#"><img src="image-resources/headerlogo.png" height="20px;"> GIGAGAMES</a></h4>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="shoppingcart.php">&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products <span class="caret"></span></a>
              <ul class="dropdown-menu bgdrop-down">
                <li><a href="XBOX.php"><b class="soledph">XBOX ONE</b></a></li>
                <li><a href="PS3.php"><b class="soledph">PS3</b></a></li>
                <li><a href="PS4.php"><b class="soledph">PS4</b></a></li>
              </ul>
            </li>
            <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <form id="search-form" class="navbar-form" role="form" method="post" id="navBarSearchForm" action="//www.google.com/search"
                target="_blank">
                <div class="input-group">
                  <input type="text" class="form-control search-form" placeholder="Search">
                  <span class="input-group-btn"><button type="submit" class="btn btn-default search-btn" data-target="#search-form" name="q"><i class="fa fa-search"></i></button></span>
                </div>

              </form>

            </li>


                        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> <b>Hi, <?php echo $userData['first_name'] ?></b> <span class="caret"></span></a>
              <ul class="dropdown-menu login-panel bgdrop-down">
                <li>
                  <div class="dropdown-header">

<li>
<?php $output = '<a href="'.$logoutURL.'" class= "btn btn-danger" value="Logout">Logout</a></li>'; echo $output;  ?> 
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
            </li>

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
          <img src="carousel/1.jpg" class="carousel-img">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img src="carousel/2.jpg" class="carousel-img">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img src="carousel/3.jpg" class="carousel-img">
          <div class="carousel-caption">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div align="center" class="container-fluid bg-red"><br>
    <h1 class="phrase">C H O O S E&nbsp;&nbsp;&nbsp;Y O U R&nbsp;&nbsp;&nbsp;C O N S O L E</h1><br>
  </div><br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="image-resources/XBOX.JPG" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2s" height="200px;">
        <a href="men.php" class="size">
          <h2 align="center" class="soledph zoom wow bounceIn" data-wow-duration="2s"><strong>XBOX ONE</strong></h2>
        </a>
      </div>
      <div class="col-lg-4">
        <img src="image-resources/PS3.JPG" alt="" class="wow fadeIn img-rounded games" data-wow-duration="2.5s" data-wow-duration="2.5s"
          height="200px;">
        <a href="women.php" class="size">
          <h2 align="center" class="soledph zoom wow bounceIn"><strong>PS3</strong></h2>
        </a>
      </div>
      <div class="col-lg-4">
        <img src="image-resources/PS4.JPG" alt="" class="wow fadeIn img-rounded games" data-wow-duration="3s" data-wow-duration="3s"
          height="200px;">
        <a href="kid.php" class="size">
          <h2 align="center" class="soledph zoom wow bounceIn"><strong>PS4</strong></h2>
        </a>
      </div>
    </div>
  </div><br><br><br>

  <div class="container-fluid bg-white">
    <div class="row">
      <div class="col-lg-4">
        <h2 align="center" class="soledph wow fadeInLeft" data-wow-duration="1.5s">New Release Games</h2>
        <hr class="hr-short">
        <p align="center" class="soledph">1.) Fallout 4 <br> 2.) The Elder Scrolls V: Skyrim Special Edition <br> 3.) ARK: Survival Evolved <br> 4.) Destiny <br> 5.) The Witcher 3: Wild Hunt </p>
      </div>
      <div class="col-lg-4">
        <h2 align="center" class="soledph wow fadeInDown" data-wow-duration="1.5s">Most Played Games</h2>
        <hr class="hr-short">
        <p align="center" class="soledph">1.) Mass Effect: Andromeda <br> 2.) Dark Souls III <br> 3.) Call of Duty: WWII <br> 4.) Mass Effect: Andromeda <br> 5.) Marvel vs. Capcom: Infinite </p>
      </div>
      <div class="col-lg-4">
        <h2 align="center" class="soledph wow fadeInRight" data-wow-duration="1.5s">Upcoming Games</h2>
        <hr class="hr-short">
        <p align="center" class="soledph">1.) FIFA 18 <br> 2.) WRC 7 <br> 3.) Gundam Versus <br> 4.) Minecraft: Story Mode - Season Two: The Telltale Series <br> 5.) Pinball FX3 </p>
      </div>
    </div>
  </div><br><br>
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