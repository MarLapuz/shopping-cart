<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Admin'){
    
    $dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
    mysqli_select_db($dbconnect, "u810519564_giga");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GigaGames | Admin</title>
        <link rel="shortcut icon" type="image/x-icon" href="image-resources/headerlogo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .form-control-inline {
                min-width: 0;
                width: 100px;
                display: inline;
            }
        </style>
    </head>

    <body>
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

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><button class="btn btn-primary btn-sm">ADD PRODUCTS</button></a></li>
                            <li><a href="logout.php">LOGOUT <span class="glyphicon glyphicon-log-out"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><br><br><br><br><br>
        <div class="container">
            <div align="center">
                <h2 class="soledph"><strong>ADD PRODUCT</strong></h2>
                <hr class="hr-short">
            </div><br><br><br><br>
            <form action="" method="POST">
                <div class="row">
                        <h3 class="white-text">Product Nsaaame: <input type="text" class="form-control" name="title"></h3><br>
                        <h3 class="white-text">Description: <span class="soledph"><?=$row['description']?></span></h3><br>
                        <h3 class="white-text">Price: <input type="number" class="form-control form-control-inline" name="price" value="<?=$row['price']?>"></h3>
                        <h3 class="white-text">Stock: <input type="number" class="form-control form-control-inline" name="stock" value="<?=$row['stock']?>"></h3>
                        <br>
                        <input type="submit" class="btn btn-default" value="Update Product">
                        <a href="admin.php"><button type="button" class="btn btn-default"/>Cancel</button></a>
                </div>
            </form>

        </div><br><br><br><br>

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
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (2 != 1+1) {
        $message = "<script type ='text/javascript'> alert ('Please fill-up all fields.')</script>";
        echo $message;
        }
    
    else {
    $query = mysqli_query($dbconnect, "SELECT Username FROM tblaccounts WHERE Username='".$_POST['Username']."' AND AccountDescription ='".$_POST['AccountDescription']."'");
        
    if(mysqli_num_rows($query) >0){
        echo "<script type ='text/javascript'> alert ('Account already used. Please use another username.')</script>";
    }
            
    else {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $id = $_GET['id']; 
        
   if($stock != "" && $price != ""){
       mysqli_query($dbconnect, "UPDATE products SET stock='$stock', price='$price' WHERE id='$id'");
       echo"<script>alert('Stock Updated!'); window.location.href='admin.php';</script>";
   }
}
}
}
}
else{header("location: login.php");}
?>