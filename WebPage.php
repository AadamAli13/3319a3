<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Aadam's Web Database </title>
</head>
<div style="text-align:center;">
<body bgcolor="#E6E6FA">
	<?php
		include 'connectdb.php';
	?> 
	<h1> Assignment 3 for 3319</h1>
	<h3> First question  </h3>
	<form action = "getproducts.php" method="post">
		<?php
			include 'customerInfo.php';
		?>
		<input type="submit" value="Get Product Names">
	</form>
	<h3> Second Question</h3>
	<?php 
		include 'productInfo.php'
	?>
	<form action = "orderproducts.php" method= "post">
		<input type="submit" name="submit" >
			<select id="order" name="order">
				<option value="dn" name="dn">descend name</option>
				<option value="dc" name="dc">descend cost</option>
				<option value="an" name="an">ascend name</option>
                                <option value="ac" name="ac">ascend cost</option>
			</select>
	</form>
        <h3> Third question  </h3>

	<form action = "addPurchase.php">
		<input type="submit" name="add purchase" value = "Purchase">
	</form>

        <h3> Fourth question  </h3>

	<form action = "addCustomer.php" method="post">
		
                <input type="submit" name="add customer" value = "Customer">
        </form>

        <h3> Fifth question  </h3>

   
	<form action = "updateCustomer.php" method="post">

                <input type="submit" name="update customer" value = "Update">
        </form>

	<h3> Sixth question  </h3>

	<form action ="deleteCust.php" method="post">
		<input type="submit" name="delete customer" value = "Delete">
	</form>

	<h3> Seventh, Eighth and Nineth question  </h3>

	<form action ="listings.php" method="post">
                <input type="submit"  value = "Listings">
        </form>
	
	<?php 
		mysqli_close($connection);
	?>
</div>
</body>
</html>
