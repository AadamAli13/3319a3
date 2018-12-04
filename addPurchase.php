<!DOCTYPE html>
<html>

<body bgcolor="#E6E6FA">
<?php
include 'connectdb.php';
?>
<h2>What would you like to Purchase?</h2>
<h2> ADD A NEW PURCHASE:</h2>
<form action="newpurch.php" method="post">
Enter valid customer ID: <input type="text" name="CID"><br>
Enter valid  Product ID: <input type="text" name="PID"> <br>
Enter quantity: <input type="text" name="quant"><br>
<input type="submit" value="Add Purchase">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
