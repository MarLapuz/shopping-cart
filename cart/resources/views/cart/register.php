<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="image-resources/headerlogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container signup-form"> 
    <h3 class="soledph">Sign Up to GigaGames</h3>
    <h5>Please specify all the information needed.</h5>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="firstname"><h4 class="soledph">First Name: </h4></label>
                <input type="text" id="inputTextBox1" class="form-control" name="Fname" placeholder="Enter First Name"  required/>
            </div>
            <div class="form-group">
            <label for="lastname"><h4 class="soledph">Last Name: </h4></label>
                
                <input type="text" id="inputTextBox" class="form-control" name="Lname" placeholder="Enter Last Name" required />
            </div>
            <div class="form-group">
            <label for="email"><h4 class="soledph">Email Address: </h4></label>
                <input type="email" class="form-control" name="username" placeholder="E-mail" required />
            </div>
            <div class="form-group">
            <label for="password"><h4 class="soledph">Password: </h4></label>
                <input type="password" class="form-control" name="password" placeholder="Password" required /><br/>
            </div>
            <div class="form-group">
            <label for="number"><h4 class="soledph">Contact Number: </h4></label>
                <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="phoneno" maxlength="11" placeholder="09XX-XXX-XXXX"  required/><br/>
            </div>
            <div class="form-group">
            <label for="gender"><h4 class="soledph">Gender: </h4></label>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male" /><span class="soledph">&nbsp;Male</span> &nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" /><span class="soledph">&nbsp;Female</span>
            </div>
            <div class="form-group" align="right">
                <input type="submit" class="btn btn-success" value="Sign-Up">
            </div>
        </form>
    </div>
</body>

</html>
<?php
error_reporting(0);
$dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
mysqli_select_db($dbconnect, "u810519564_giga");
$lname= $_POST['Lname'];
$fname= $_POST['Fname'];
$username= $_POST['username'];
$password= $_POST['password'];
$gender = $_POST['gender'];
$account = ("Guest");
$fullname = ucwords("$lname $fname");
if($fname != "" AND $lname != "" AND $username != "" AND $gender != "" AND $password != "") {
    mysqli_query($dbconnect, "INSERT INTO users (first_name, last_name, email, gender, password) VALUES ('".$fname."','".$lname."','".$username."','".$gender."','".$password."')");
    echo"<script>alert('Registered!'); window.location.href='index.php';</script>";
}


?>
    <script>
        $(document).ready(function () {
            $("#inputTextBox").keypress(function (event) {
                var inputValue = event.charCode;
                if (!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) {
                    event.preventDefault();
                }
            });
        });

        $(document).ready(function () {
            $("#inputTextBox1").keypress(function (event) {
                var inputValue = event.charCode;
                if (!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) {
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
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                        105)) {
                    e.preventDefault();
                }
            });
        });
    </script>