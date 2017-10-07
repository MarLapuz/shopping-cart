<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Admin'){
  $dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
  mysqli_select_db($dbconnect, "u810519564_giga");
    $query = mysqli_query($dbconnect, "SELECT * FROM products ORDER BY id ASC");
    $query1 = mysqli_query($dbconnect, "SELECT * FROM customers ORDER BY id ASC");
    $query2 = mysqli_query($dbconnect, "SELECT * FROM addresses ORDER BY id ASC");
    $query3 = mysqli_query($dbconnect, "SELECT * FROM orders ORDER BY id ASC");
    $query4 = mysqli_query($dbconnect, "SELECT * FROM orders_products ORDER BY id ASC");
    $query5 = mysqli_query($dbconnect, "SELECT * FROM payments ORDER BY id ASC");
    $query6 = mysqli_query($dbconnect, "SELECT * FROM accounts ORDER BY Account_ID ASC");
    $query7 = mysqli_query($dbconnect, "SELECT COUNT(1) FROM orders");
    $query8 = mysqli_query($dbconnect, "SELECT COUNT(1) FROM customers");
    $count_customers = mysqli_fetch_array($query8);
    $total_customers = $count_customers[0];
    $count_orders = mysqli_fetch_array($query7);
    $total_orders = $count_orders[0];
    $sql = "SELECT SUM(total) FROM orders";
    $q = mysqli_query($dbconnect, $sql);
    $row = mysqli_fetch_array($q);
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
      .modal-content {
        background-color: #212020;
        float: center;
      }

      #myModal {
        width: 700px;
        margin-top: -300px !important;
        margin-left: -350px !important;
      }

      #myModal .modal-body {
        max-height: 525px;
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
              <li><a href="#" class="soledph">Hi <?php echo ucfirst($_SESSION['Username']);?></a></li>
              <li><a href="#" data-toggle="modal" data-target="#add"><button class="btn btn-primary btn-sm">ADD PRODUCTS</button></a></li>
              <li><a href="logout.php">LOGOUT <span class="glyphicon glyphicon-log-out"></span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div><br><br><br><br><br>
    <div class="container">
      <h2 class="soledph">Total Customers: <?php echo $total_customers; ?></h2>
      <h2 class="soledph">Total Orders: <?php echo $total_orders; ?></h2>
      <h2 class="soledph">Total Income: <?php echo '$'.$row[0];?></h2>
    </div><br><br>
    <div class="container-fluid" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#products">View Products</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#customers">View Customers</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addresses">View Customers Addresses</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#orders">View Orders</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#orders-products">View Orders-Products</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#payments">View Payments</button>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#accounts">View Accounts</button>
      </div>
      <br/><br/>

      <div id="products" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
        <table class="table table-hover" style="text-align:center;">
          <h3>PRODUCTS</h3>
          <hr>
          <thead>
            <tr>
              <th style="text-align:center;"><strong>ID</strong></th>
              <th style="text-align:center;"><strong>Image</strong></th>
              <th style="text-align:center;"><strong>Title</strong></th>
              <th style="text-align:center;"><strong>Description</strong></th>
              <th style="text-align:center;"><strong>Price</strong></th>
              <th style="text-align:center;"><strong>Stock</strong></th>
              <th style="text-align:center;"><strong>Created_at</strong></th>
              <th style="text-align:center;"><strong>Updated_at</strong></th>
              <th style="text-align:center;"><strong>Action</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php
          while ($row = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td>
                  <?=$row['id']?>
                </td>
                <td><img src="<?=$row['image']?>" height="60px;"></td>
                <td>
                  <?=$row['title']?>
                </td>
                <td>
                  <?=$row['description']?>
                </td>
                <td>
                  <?=$row['price']?>
                </td>
                <td>
                  <?=$row['stock']?>
                </td>
                <td>
                  <?=$row['created_at']?>
                </td>
                <td>
                  <?=$row['updated_at']?>
                </td>
                <td>
                  <a href="update.php?id=<?=$row['id']?>">[Update Stocks]</a>
                </td>
                <tr>
                  <?php
      }
          ?>
                </tr>

          </tbody>
        </table>
      </div>
    </div><br>

    <div id="customers" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">CUSTOMERS</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Name</strong></th>
            <th style="text-align:center;"><strong>Email</strong></th>
            <th style="text-align:center;"><strong>Created_At</strong></th>
            <th style="text-align:center;"><strong>Updated_At</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query1)){
              ?>
            <tr>
              <td>
                <?=$row['id']?>
              </td>
              <td>
                <?=$row['name']?>
              </td>
              <td>
                <?=$row['email']?>
              </td>
              <td>
                <?=$row['created_at']?>
              </td>
              <td>
                <?=$row['updated_at']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <div id="addresses" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">CUSTOMERS' ADDRESSES</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Address 1</strong></th>
            <th style="text-align:center;"><strong>Address 2</strong></th>
            <th style="text-align:center;"><strong>City</strong></th>
            <th style="text-align:center;"><strong>Postal_Code</strong></th>
            <th style="text-align:center;"><strong>Created_At</strong></th>
            <th style="text-align:center;"><strong>Updated_At</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query2)){
              ?>
            <tr>
              <td>
                <?=$row['id']?>
              </td>
              <td>
                <?=$row['address1']?>
              </td>
              <td>
                <?=$row['address2']?>
              </td>
              <td>
                <?=$row['city']?>
              </td>
              <td>
                <?=$row['postal_code']?>
              </td>
              <td>
                <?=$row['created_at']?>
              </td>
              <td>
                <?=$row['updated_at']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <div id="orders" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">ORDERS</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Total</strong></th>
            <th style="text-align:center;"><strong>Address ID</strong></th>
            <th style="text-align:center;"><strong>Paid</strong></th>
            <th style="text-align:center;"><strong>Customer ID</strong></th>
            <th style="text-align:center;"><strong>Created_at</strong></th>
            <th style="text-align:center;"><strong>Updated_at</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query3)){
              ?>
            <tr>
              <td>
                <?=$row['id']?>
              </td>
              <td>
                <?=$row['total']?>
              </td>
              <td>
                <?=$row['address_id']?>
              </td>
              <td>
                <?=$row['paid']?>
              </td>
              <td>
                <?=$row['customer_id']?>
              </td>
              <td>
                <?=$row['created_at']?>
              </td>
              <td>
                <?=$row['updated_at']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <div id="orders-products" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">ORDERS-PRODUCTS</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Order ID</strong></th>
            <th style="text-align:center;"><strong>Product ID</strong></th>
            <th style="text-align:center;"><strong>Quantity</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query4)){
              ?>
            <tr>
              <td>
                <?=$row['id']?>
              </td>
              <td>
                <?=$row['order_id']?>
              </td>
              <td>
                <?=$row['product_id']?>
              </td>
              <td>
                <?=$row['quantity']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <div id="payments" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">PAYMENTS</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Order ID</strong></th>
            <th style="text-align:center;"><strong>Failed</strong></th>
            <th style="text-align:center;"><strong>Transaction ID</strong></th>
            <th style="text-align:center;"><strong>Created</strong></th>
            <th style="text-align:center;"><strong>Updated_At</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query5)){
              ?>
            <tr>
              <td>
                <?=$row['id']?>
              </td>
              <td>
                <?=$row['order_id']?>
              </td>
              <td>
                <?=$row['failed']?>
              </td>
              <td>
                <?=$row['transaction_id']?>
              </td>
              <td>
                <?=$row['created_at']?>
              </td>
              <td>
                <?=$row['updated_at']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <div id="accounts" class="collapse table-responsive" style="background-color:white; border-radius:10px;"><br/>
      <table class="table table-hover" style="text-align:center;">
        <h3 align="center">ACCOUNTS</h3>
        <hr>
        <thead>
          <tr>
            <th style="text-align:center;"><strong>ID</strong></th>
            <th style="text-align:center;"><strong>Name</strong></th>
            <th style="text-align:center;"><strong>Username</strong></th>
            <th style="text-align:center;"><strong>Email</strong></th>
            <th style="text-align:center;"><strong>Password</strong></th>
            <th style="text-align:center;"><strong>Account Description</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($query6)){
              ?>
            <tr>
              <td>
                <?=$row['Account_ID']?>
              </td>
              <td>
                <?=$row['Name']?>
              </td>
              <td>
                <?=$row['Username']?>
              </td>
              <td>
                <?=$row['Email']?>
              </td>
              <td>
                <?=md5($row['Password'])?>
              </td>
              <td>
                <?=$row['Account_Description']?>
              </td>
              <tr>
                <?php
      }
          ?>
              </tr>

        </tbody>
      </table>
    </div>
    </div><br>

    <!-- Modal -->
    <div class="modal fade " id="add" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div align="center" class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 align="center" class="modal-title"><strong class="soledph">ADD PRODUCT</strong></h4>
            <hr class="hr-short">
          </div>
          <div class="modal-body">
            <form class="form-inline" action="admin.php" method="post">
              <div class="form-group">
                <label for="image" class="white-text">Product Image:&nbsp;</label>
                <img src="image-resources/NeedForSpeed.jpg" height="100px;">
              </div><br><br>
              <div class="row">
                <div class="col-md-6">
                  <br>
              <div class="form-group">
                <label for="title" class="white-text">Name of Product:&nbsp;</label>
                <input type="text" id="inputTextBox" class="form-control" name="title" placeholder="Enter Name of Product" required>     
                </div><br><br>

              <div class="form-group">
                <div class="dropdown">
                  <label for="description" class="white-text">&nbsp;Console:</label>
                  <select name="description" id="description" required>
                 <option value="XBOX">XBOX</option>
                 <option value="PS3">PS3</option>
                 <option value="PS4">PS4</option>
              </select>
                </div>
              </div>
              </div>

              <div class="col-md-6"><br>
              <div class="form-group">
                <label for="price" class="white-text">Price:&nbsp;&nbsp;</label><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                  class="form-control" name="price" placeholder="Enter Price of Product" required/>
                </div><br><br>

              <div class="form-group">
                <!-- Date input -->
                <label for="stock" class="white-text">Quantity:</label>
                <input class="form-control" name="stock" id="stock" type="number" require />
              </div>

              <br><br>
          </div>
          <div class="modal-footer">
            <input type="submit" value="Add Product" class="btn btn-default">
          </div>
        </div>
        </div>
        </form>


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
      $check = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino") or die("Error connecting to database: ".mysql_error());
      mysqli_select_db($check, "u810519564_giga") or die(mysqli_error());

    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $Price = $_POST['price'];
    $Stock = $_POST['stock'];
    $Created_At = date();
    $Updated_At= date();
        mysqli_query($dbconnect, "INSERT INTO products (title, slug, description, price, stock, created_at, updated_at) VALUES ('$Title', '$Title', '$Description', '$Price', '$Stock', '$Created_At', '$Updated_At')");
        echo"<script>alert('New Product has been added!'); window.location.href='admin.php';</script>";
}
}
else{header("location: login.php");
}
?>