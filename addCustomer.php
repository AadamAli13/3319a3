<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Shop</h1>
<h2> ADD A NEW CUSTOMER:</h2>
<form action= "newcustomer.php" method="post">
Enter new  customer ID: <input type="text" name="CID"><br>
Enter new  Frist Name: <input type="text" name="FN"> <br>
Enter new  Last Name: <input type="text" name="LN"><br>
Enter new  City: <input type="text" name="C"> <br>

<?php
$query = "SELECT agentID  FROM agent GROUP BY agentID";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which agent did you deal with? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="agents" value="';
        echo $row["agentID"];
        echo '">' . $row["agentID"] . "<br>";
}
mysqli_free_result($result);

?>

Enter new  phone number: <input type="text" name="PN"><br>
<input type="submit" value="Add Customer">

</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

