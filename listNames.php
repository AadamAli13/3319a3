<?php
        include'connectdb.php'; ?> 
<?php 
$qu = $_POST["q"]; 
$query = "SELECT firstName, lastName, products.description, quantityPurchased.quantitySold FROM 
customers LEFT JOIN quantityPurchased ON customers.customerID = quantityPurchased.customerID LEFT JOIN products ON quantityPurchased.productID = 
products.productID WHERE quantityPurchased.quantitySold > '$qu'"; 
$result = mysqli_query($connection,$query); 
if (!$result) {
    die("databases query failed.");
}
else{

        while ($row = mysqli_fetch_assoc($result)) {
                echo  $row["description"] . ", " . $row["quantitySold"] . "<br>";
        }

}

 mysqli_close($connection);


?>


