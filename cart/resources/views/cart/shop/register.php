
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <script src="link/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


    <head>
        <title>ADD NEW USER</title>
    </head>
    <body align="center">
            <table align="center"  width="500px" cellpadding="10" >
            <tr>
               <td class="tableheader" colspan="2" style="padding: 10px;">Enter Add Details</td> 
            </tr>
        <form action = "" method="post">
                    <tr class="tablerow">
            <td align="right" style="padding: 10px;">Last Name</td>
            <td align="left"><input type="text" id="inputTextBox" class="form-control" name="Lname" placeholder="Enter Last Name" /></td>
                </tr>
                            <tr class="tablerow">
            <td align="right" style="padding: 10px;">First Name</td>
            <td align="left"><input type="text" id="inputTextBox1" class="form-control" name="Fname" placeholder="Enter First Name" /></td>
                </tr>
            <tr class="tablerow">
            <td align="right" style="padding: 10px;">E-mail</td>
            <td align="left"><input type="email" class="form-control" name="username" placeholder="E-mail" /></td>
                </tr>
            <tr class="tablerow">
                <td align="right" style="padding: 10px;">Password: </td> 
                <td align="left"><input type="password" class="form-control" name="password" placeholder="Password" /><br/></td>
                </tr>
                            <tr class="tablerow">
                <td align="right" style="padding: 10px;">Phone Number: </td> 
                <td align="left"><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="phoneno" maxlength="11" placeholder="09XX-XXX-XXXX"/><br/></td>
                </tr>
                                            <tr class="tablerow">
                <td align="right" style="padding: 10px;">Gender: </td> 
                <td align="left"><input type="radio" name="gender" value="Male"/>Male<br/>
                <input type="radio" name="gender" value="Female"/>Female</td>
                </tr>
            <tr class="tableheader"> 
            <td colspan="2" style="padding: 10px;"><input type="submit" class="btn-default" value="Register" ></td>
            </tr>
        </form></table>
    </body>
</html>
<?php
error_reporting(0);
    $dbconnect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($dbconnect, "soleddb");
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
$(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});

$(document).ready(function(){
    $("#inputTextBox1").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});

$(document).ready(function() {
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