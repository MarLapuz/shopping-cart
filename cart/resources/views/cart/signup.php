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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="preloader"></div>
<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h4>SIGN-UP TO <span class="soledph">GIGAGAMES </span><img src="image-resources/headerlogo.png" height="20px"></h4><hr>
					<form method="post" action="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label soledph">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label soledph">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label soledph">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label soledph">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Sign-Up</button ><br>
						</div>
						
					</form>
				</div>
			</div>
		</div>
</body>
</html>
<?php 

$dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
mysqli_select_db($dbconnect, "u810519564_giga");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (2 != 1+1) {
    $message = "<script type ='text/javascript'> alert ('Please fill-up all fields.')</script>";
	echo $message;
    }
    
    else {
    $query = mysqli_query($dbconnect, "SELECT Username, Account_Description FROM accounts WHERE Username='".$_POST['username']."'");
        
    if(mysqli_num_rows($query) >0){
        echo "<script type ='text/javascript'> alert ('Account already used. Please input another username.')</script>";
    }
            
    else {
 $con = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino") or die("Error connecting to database: ".mysql_error());
     
 mysqli_select_db($con, "u810519564_giga") or die(mysqli_error());
 $Account_ID = $_POST['Account_ID'];
 $Name = $_POST['name']; 
 $Username = $_POST['username']; 
 $Email = $_POST['email']; 
 $Password = $_POST['password'];
 $Account_Description = "Customer";

 $sql = "INSERT INTO accounts (Account_ID, Name, Username, Email, Password, Account_Description) VALUES ('".$Account_ID."' , '".$Name."', '".$Username."', '".$Email."', '".$Password."','".$Account_Description."')";

if ($con->query($sql) === TRUE) {
    echo "<script type ='text/javascript'> alert ('You are now Registered to GigaGames'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    }
}
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