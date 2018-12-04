<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<?php
include 'connectdb.php';
?>
<h2> LISTING QUESIONS:</h2>
<form action="listNames.php"  method="post">
Enter quantity : <input type="text" name="q"><br>
<input type="submit" value="Get Names Greater">

</form>
<h3> Eighth question </h3>
<form action="listProd.php" method="post">
	<input type="submit" value="Products not purchased">
</form>

<h3> Nineth Question </h3>
<form action="listCost.php" method="post">
	
	<?php
	$query = "SELECT productID FROM quantityPurchased GROUP BY productID";
	$result = mysqli_query($connection,$query);
	if (!$result) {
    		die("databases query failed.");
	}
	echo "Pick your product <br>";
   	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="pro" value="';
        	echo $row["productID"];
        	echo '">' . $row["productID"] . "<br>";
	}	
	mysqli_free_result($result);
?>

        <input type="submit" value="Cost of Purchase">
</form>

<?php
mysqli_close($connection);
?>
</body>
</html>


