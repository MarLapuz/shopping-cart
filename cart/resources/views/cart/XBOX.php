<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOLEDPH</title>
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
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <h4><a class="soledph" href="#">SOLEDPH</a></h4>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="shoppingcart.php">&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products <span class="caret"></span></a>
                            <ul class="dropdown-menu bgdrop-down">
                                <li><a href="men.php"><b class="soledph">MEN</b></a></li>
                                <li><a href="women.php"><b class="soledph">WOMEN</b></a></li>
                                <li><a href="kid.php"><b class="soledph">KIDS</b></a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> <b>Login</b> <span class="caret"></span></a>
                            <ul class="dropdown-menu login-panel bgdrop-down">
                                <li>
                                    <div class="dropdown-header">
                                        <span class="login-header red">Sign In</span>
                                        <span class="sign-up"><a href="" class="sign-up">Sign-Up</a></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div style="padding: 8px;">
                                        <form id="loginform" class="form-horizontal" role="form" autocomplete="off">
                                            <div style="margin-bottom: 10px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <!-- USERNAME OR EMAIL ADDRESS -->
                                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}"
                                                    title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')"
                                                    oninput="setCustomValidity('')" required>
                                            </div>
                                            <div style="margin-bottom: 10px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <!--  PASSWORD  -->
                                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers."
                                                    oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')"
                                                    required>
                                            </div>
                                            <div style="margin-top:10px" class="form-group">
                                                <!-- Button -->
                                                <div class="col-sm-12 controls center-text">
                                                    <a id="btn-login" href="#" class="btn btn-danger">Login</a>
                                                    <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <!--<li class="divider"></li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div><br><br>

    <div align="center" class="container-fluid bg-red"><br>
        <h1 class="phrase">S O L E&nbsp;&nbsp;FOR&nbsp;&nbsp;M E N</h1><br>
    </div><br><br>

    <div class="container bg-white">
        <div class="row">
            <hr class="hr-container">
            <div class="col-lg-3">
                <img src="products/Air_Huarache_Ultra.jpg" alt="" height="250px;">
                <p><strong>NIKE</strong><br> AIR HUARACHE ULTRA</p>
                SIZE:
                <select name="size" id="size-shoes-1">
            <option value=""></option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
                <strong>P 5,500</strong><br><br>
                <button type="button" class="btn btn-danger wow bounceIn">ADD TO CART</button>
            </div>
            <div class="col-lg-3">
                <img src="products/Air_Max_90_Ultra_2.0_Essential.jpg" alt="" height="250px;">
                <p><strong>NIKE</strong><br> AIR MAX 90 ULTRA 2.0 ESSENTIAL</p>
                SIZE:
                <select name="size" id="size-shoes-2">
            <option value=""></option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
                <strong>P 4,000</strong><br><br>
                <button type="button" class="btn btn-danger wow bounceIn">ADD TO CART</button>
            </div>
            <div class="col-lg-3">
                <img src="products/Air_Max_97_Ultra.jpg" alt="" height="250px;">
                <p><strong>NIKE</strong><br> AIR MAX 97 ULTRA</p>
                SIZE:
                <select name="size" id="size-shoes-3">
            <option value=""></option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
                <strong>P 6,000</strong><br><br>
                <button type="button" class="btn btn-danger wow bounceIn">ADD TO CART</button>
            </div>
            <div class="col-lg-3">
                <img src="products/New_Balance_Black_White.jpg" alt="" height="250px;">
                <p><strong>NEW BALANCE</strong><br> 570 SHADED BLACK</p>
                SIZE:
                <select name="size" id="size-shoes-4">
            <option value=""></option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
                <strong>P 4,300</strong><br><br>
                <button type="button" class="btn btn-danger wow bounceIn">ADD TO CART</button>
            </div>
        </div>
        <hr class="hr-container">
    </div><br><br>
    <div align="center" class="container-fluid bg-red"><br>
        <h3 class="phrase"><strong>CHANGE HOW YOU STEP | S O L E D P H</strong></h3><br>
    </div>
    <footer class="container-fluid">
        <div class="container">
            <div class="row soledph"><br>
                <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
                    <h4><strong>CONTACT CUSTOMER CARE</strong></h4>
                    <p>(+639) 912-345-6789</p>
                    <p>Open Daily : 10:00am - 9:00pm</p>
                    <p>support@soledph</p>
                </div>
                <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s">
                    <h4><strong>@SOLEDPH</strong></h4>
                    <a href="#"><img src="logo/fb.png" alt="" height="50px;"></a>
                    <a href="#"><img src="logo/twitter.png" alt="" height="50px;"></a>
                    <a href="#"><img src="logo/ig.png" alt="" height="40px;">&nbsp;&nbsp;</a>
                    <a href="#"><img src="logo/gmail.png" alt="" height="30px;"></a>
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
            <h5 align="center" class="soledph">&copy; ALL RIGHTS RESERVED SOLEDPH 2017</h5>
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