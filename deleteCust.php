
<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<?php
include 'connectdb.php';
?>
<h2>Who would you like to delete?</h2>
<form action="delcustomer.php"  method="post">
<?php
$query = "SELECT customerID  FROM customers GROUP BY customerID";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which customer are you going to delete? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="cust" value="';
        echo $row["customerID"];
        echo '">' . $row["customerID"] . "<br>";
}
mysqli_free_result($result);
?>

<input type="submit" value="Delete Customer">

</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

