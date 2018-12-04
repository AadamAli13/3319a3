<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<?php
include 'connectdb.php';
?>
<h2> UPDATE A NEW CUSTOMER:</h2>
<form action="upcustomer.php"  method="post">
<?php
$query = "SELECT customerID, phoneNumber FROM customers GROUP BY customerID";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which customer are you going to update? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customers" value="';
        echo $row["customerID"];
        echo '">' . $row["customerID"] . ", " . $row["phoneNumber"] . "<br>";
}
mysqli_free_result($result);
?>

Enter updated phone number: <input type="text" name="Phone"><br>
<input type="submit" value="Update Customer">

</form>
<?php
mysqli_close($connection);
?>
</body>
</html>


