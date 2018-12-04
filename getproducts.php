<!DOCTYPE html>
<html>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here the products!</h1>
<ol>
<?php
   $whichOwner= $_POST["products"];
   $query = 'SELECT customers.lastName, products.description FROM customers
	LEFT JOIN quantityPurchased ON customers.customerID = quantityPurchased.customerID
	LEFT JOIN products ON quantityPurchased.productID = products.productID
	WHERE customers.customerID = quantityPurchased.customerID AND quantityPurchased.customerID="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
