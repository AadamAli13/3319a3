<?php
        include'connectdb.php';
?>
<?php
$pr = $_POST["pro"];
$query = "SELECT SUM(quantitySold) AS val, cost * SUM(quantitySold) AS cost, products.description  FROM quantityPurchased INNER JOIN products ON quantityPurchased.productID = products.productID WHERE quantityPurchased.productID = '$pr'";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
else{

        while ($row = mysqli_fetch_assoc($result)) {
                echo  $row["val"] . ", ". $row["cost"]. ", " . $row["description"].  "<br>";
        }

}

 mysqli_close($connection);


?>

