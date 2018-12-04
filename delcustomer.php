<?php
       include 'connectdb.php';
?>

<?php
$cu = $_POST["cust"];
$query = "DELETE FROM customers WHERE customerID = '$cu'";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
else{
        echo "Customer Deleted";
        $q = "SELECT * FROM customers GROUP BY lastName";
        $r = mysqli_query($connection,$q);
        if (!$r) {
                die("databases query failed.");
        }
        echo " UPDATED </br>";
        while ($row = mysqli_fetch_assoc($r)) {
                echo  $row["customerID"]. ", "  . $row["firstName"] . " " . $row["lastName"] . "<br>";
        }

}

 mysqli_close($connection);


?>

