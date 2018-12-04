<?php
       include 'connectdb.php';
?>

<?php
$p = $_POST["Phone"];
$c = $_POST["customers"];
$query = "UPDATE customers SET phoneNumber ='$p' WHERE customerID ='$c' ";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
else{	
	echo "Phone Number Updated";
	$q = "SELECT * FROM customers GROUP BY lastName";
	$r = mysqli_query($connection,$q);
	if (!$r) {
    		die("databases query failed.");
	}
	echo " UPDATED </br>";
   	while ($row = mysqli_fetch_assoc($r)) {
        	echo  $row["customerID"]. ", "  . $row["firstName"] . " " . $row["lastName"] .
         	", " . $row["city"] . ", " . $row["agentID"] .
        	", " . $row["phoneNumber"] . "<br>";
	}
	
}

 mysqli_close($connection);


?>


