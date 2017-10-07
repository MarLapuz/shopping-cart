<?php 
session_start();

 $page = 'index.php';

 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'shop') or die(mysqli_error());

 if (isset($_GET['add'])) {
 	$quantity = mysqli_query('SELECT id, quantity FROM products WHERE id='.mysqli_real_escape_string((int)$_GET['add']));
 	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
 		if ($quantity_row['quantity']!=$_SESSION['cart_'.(int)$_GET['add']]) {
 				$_SESSION['cart_'.(int)$_GET['add']]+='1';
 		}// end of if
 	}// end of while
 	header('Location: '.$page);
 }// end of if isset add

 if (isset($_GET['remove'])){
 	$_SESSION['cart_'.(int)$_GET['remove']]--;
 	header('Location: '.$page);
 }// end of isset remove

 if (isset($_GET['delete'])){
 	$_SESSION['cart_'.(int)$_GET['delete']]='0';
 	header('Location: '.$page);
 }// end of if delete

function products() {
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'shop') or die(mysqli_error());
	$get = mysqli_query($con, 'SELECT id, name, description, price, shipping FROM products WHERE quantity > 0 ORDER BY id ASC');
	if (mysqli_num_rows($get) ==0) {
		echo "Sorry! There are no products to display!";
	}// end of if statement $get == 0
	else {
		while ($get_row = mysqli_fetch_assoc($get)) {
			echo '<p> '.$get_row['name'].' <br />'.$get_row['description'].' <br /> P'.number_format($get_row['price'], 2).' <a href="cart.php?add='.$get_row['id'].'">Add</a> <br /> P'.number_format($get_row['shipping'], 2).' </p>';
		}// end of while
	}// end of else statement

}//end of function product

function paypal_items() {
	$num = 0;
	foreach ($_SESSION as $name => $value) {
		if ($value!=0) {
			if (substr($name, 0, 5)=='cart_') {
				$id = substr($name, 5, strlen($name)-5);
				$get = mysqli_query('SELECT id, name, price, shipping FROM products WHERE id='.mysqli_real_escape_string((int)$id));
					while ($get_row = mysqli_fetch_assoc($get)) {
						$num++;
						echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'" >';
						echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
						echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
						echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
						echo '<input type="hidden" name="shipping2_'.$num.'" value="'.$get_row['shipping'].'">';
						echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					}// end of while 
			}//end of if substr
		}//end of if $value
	}//end of foreach
}//end of paypal items

function cart() {
	foreach ($_SESSION as $name => $value) {
		if ($value>0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name)-5));
				$get = mysqli_query('SELECT id, name, price FROM products WHERE id='.mysqli_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)){
					$sub = $get_row['price']*$value;
					echo $get_row['name'].' x '.$value. ' @ P' .number_format($get_row['price'], 2).' = P' .number_format($sub, 2).' <a href="cart.php?remove='.$id.'">[Minus an item]</a> | <a href="cart.php?add='.$id.'">[Add more item]</a> | <a href="cart.php?delete='.$id.'">  [Delete order]</a> <br />';
					}//end of while
				}//end of if substr
				$total += $sub; 
		}// end of if
	}// end of foreach
	if ($total==0){
		echo "Your cart is empty";
	}
	else {
		echo '<p>Total: P'.number_format($total, 2). '<br /></p>';
		?>		
		<p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="you@youremail.com">
		<?php paypal_items(); ?>
		<input type="hidden" name="currency_code" value="PHP">
		<input type="hidden" name="amount" value="<?php echo $total; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		</form>
		</p>
		<?php
	}
}// end of function cart

?>