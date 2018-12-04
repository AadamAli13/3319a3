
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your customers:</h1>
<ol>
<?php
   $whichagent= $_POST["agents"];
   $newID = $_POST["CID"];
   $fn = $_POST["FN"];
   $ln = $_POST["LN"];
   $cit= $_POST["C"];
   $pn = $_POST["PN"];
   $query = 'INSERT INTO customers VALUES("'.$newID.'","' .$fn. '","' .$ln. '","' . $cit . '","' .$whichagent. '","' . $pn . '")';
   $q2 = 'SELECT customerID FROM customers';
   $result=mysqli_query($connection,$q2);
   $check = 0;
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        if($row[0] == $newID){
		$check = $check + 1;
	}
     }

     if($check == 1 ||is_int($check)==FALSE){
	die("ID exists or invalid");
     }
     else{
	if(!mysqli_query($connection, $query)){
		 die("Error: insert failed go back and try again!" . mysqli_error($connection));
	}
	 else{ echo "customer inserted";
         }

	 $q = "SELECT * FROM customers";
  	 $r = mysqli_query($connection,$q);
  	 if (!$r) {
        	  die("databases query failed.");
   	 }
   	 echo "<ol>";
  	 while ($row = mysqli_fetch_assoc($r)) {
        	 echo "<li>";
        	 echo $row["customerID"]. ", " . $row["firstName"] . " " . $row["lastName"].  ", " . $row["city"] . ", " . $row["agentID"]. ", " . $row["phoneNumber"] . "</li>";
 
  	 }
	
     }

	
     
     mysqli_close($connection);
?>
</ol>
</body>
</html>

