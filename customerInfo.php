
<?php
$query = "SELECT * FROM customers GROUP BY lastName";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Whose products would you like to see? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="products" value="';
        echo $row["customerID"];
        echo '">'. $row["customerID"]. ", "  . $row["firstName"] . " " . $row["lastName"] . 
	 ", " . $row["city"] . ", " . $row["agentID"] . 
	", " . $row["phoneNumber"] . "<br>";
}
mysqli_free_result($result);

?>
