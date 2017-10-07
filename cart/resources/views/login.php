<?php
session_start();
$message = "";
if (count($_POST)>0){
    $dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
    mysqli_select_db($dbconnect, "u810519564_giga");
    $query = mysqli_query($dbconnect, " SELECT * FROM accounts WHERE Username='".$_POST['username']."' AND Password='".$_POST['password']."'");
    $row = mysqli_fetch_array($query);
    if (is_array($row)){
        $_SESSION['Account_ID'] = $row['Account_ID'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Password'] = $row['Password'];
        $_SESSION['Account_Description'] = $row['Account_Description'];
    }
    
    else{
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Admin'){
    header ("location: admin.php");
}
else if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Customer' ){
    header ("location: index.php");
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GigaGames | Login</title>
        <link rel="shortcut icon" type="image/x-icon" href="image-resources/headerlogo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
    <div class="preloader"></div><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="show-lg hidden-xs show-sm show-md">
                    <img src="image-resources/LoginSale.jpg" class="loginsale" height="350px;">
                </div>
                <div class="hidden-lg show-xs hidden-sm hidden-md">
                    <img src="image-resources/LoginSale.jpg" height="160px;" >
                    <br><br>
                </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="main-login main-center">
                        <h4>ENTER TO <span class="soledph">GIGAGAMES </span><img src="image-resources/headerlogo.png" height="20px"></h4>
                        <hr>
                        <form method="post" action="">

                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label soledph">Username</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label soledph">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">LOGIN</button ><br>
                        </div>
                        <div align="center">
                        <a href="signup.php">Don't have an account? Sign-up here.</a>
						</div><br>
					</form>
				</div><br>
			</div>
        </div>
        </div>
</body>
</html>
<?php 
if($message!=""){
    echo "<script type ='text/javascript'> alert ('$message')</script>";
}
?>
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