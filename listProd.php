<?php
	include'connectdb.php';
?>
<?php
$query = "SELECT description FROM products WHERE productID NOT IN (SELECT productID FROM quantityPurchased)";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
else{
        
        while ($row = mysqli_fetch_assoc($result)) {
                echo  $row["description"] . "<br>";
        }

}

 mysqli_close($connection);


?>

