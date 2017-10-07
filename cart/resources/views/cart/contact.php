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
    <title>GigaGames | Contact Us</title>
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
          <h4><a class="soledph" href="/../resources/views/cart/index.php"><img src="image-resources/headerlogo.png" height="20px;"> GIGAGAMES</a></h4>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="/../public/index.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Products</a></li>
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

    <div align="center" class="container-fluid bg-red"><br>
        <h1 class="phrase hidden-xs">C O N T A C T&nbsp;&nbsp;U S</h1><br>
        <h2 class="hidden-lg hidden-md hidden-sm">C O N T A C T&nbsp;&nbsp;U S</h2><br>
    </div><br><br>
    <div class="container bg-white">
        <div class="row white-text">
            <form action="" method="post" class="form-inline">
                <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="FirstName"><h3>First Name :</h3></label>
                        <input type="text" class="form-control inputTextBox" name="fname" id="fname"  placeholder="First Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="LastName"><h3>Last Name :</h3></label>
                        <input type="text" class="form-control inputTextBox" name="lname" id="lname"  placeholder="Last Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="contact"><h3>Contact Number :</h3></label>
                        <input type="text" class="form-control" name="contact" id="contact"onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11"  placeholder="XXXX-XXX-XXXX" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><h3>Email :</h3></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email Address  " required/>
                    </div><br>
                    <div class="form-group show-lg hidden-xs hidden-sm show-md">
                        <label for="message"><h3>Message :</h3></label>
                        <textarea name="message" id="message" cols="70" rows="8" placeholder="  Message Here"></textarea><br>
                    </div>
                    <div class="form-group hidden-lg show-xs hidden-sm hidden-md">
                        <label for="message"><h3>Message :</h3></label>
                        <textarea name="message" id="message" cols="35" rows="8" placeholder="  Message Here"></textarea><br>
                    </div><br><br>
                    <div align="left">
                        <button type="submit" class="btn btn-danger wow fadeIn" name="submit" value="submit"><h5><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;SEND</h5></button>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                    <div id="gmap_canvas" class="map servicemap hidden-sm hidden-xs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.459702160083!2d120.587822314544!3d15.133077989465158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f24ec2f5a1f9%3A0x5e0af8a6aaab2282!2sHoly+Angel+University!5e0!3m2!1sen!2sph!4v1506543201377" width="520" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div><br><br>
    <div align="center" class="container-fluid bg-red"><br>
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
  $(document).ready(function () {
    $(".inputTextBox").keypress(function (event) {
      var inputValue = event.charCode;
      if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
        event.preventDefault();
      }
    });
  });

  $(document).ready(function () {
    $("#txtboxToFilter").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    });
  });
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