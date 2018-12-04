<!DOCTYPE html>
<html>

<body>
<?php
   include 'connectdb.php';
?>
<h1>Here's your purchase!:</h1>
<ol>
<?php
   $quan= $_POST["quant"];
   $cust = $_POST["CID"];
   $prod =$_POST["PID"];
   $query1= 'select customerID from customers';
   $result=mysqli_query($connection,$query1);
   $check = 0;
   $query2= 'select productID from products';
   $result1=mysqli_query($connection,$query2);
   $check1 = 0;
   $query3 = 'SELECT customerID, productID FROM quantityPurchased';
   $result2=mysqli_query($connection,$query3); 
   if (!$result) {
          die("database max query failed.");
   }
   
	
   while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
	if($row[0] == $cust){
		$check = $check +1;
	}
	if($cust == 10){
		$check = $check +1;
	}
   }	   
   if ($check == 0){
	die("Invalid customer ID");
   }

   if (!$result1) {
          die("database max query failed.");
   }

   while($row = mysqli_fetch_array($result1, MYSQLI_NUM)){
        if($row[0] == $prod){
                $check1 = $check1 +1;
        }
        if($prod == 11){
                $check1 = $check1 +1;
        }
   }


   if ($check1 == 0){
        die("Invalid product ID");
   }
   $check2 = 0;
   while($row = mysqli_fetch_array($result2, MYSQLI_NUM)){
        if($row[0] == $cust && $row[1] == $prod){
                $check2 = $check2 +1;
        }
   }
   if ($check2 == 1 && $quan > 0 ){
        $queryy='UPDATE quantityPurchased SET quantitySold = quantitySold + '.$quan.'  WHERE productID = '.$prod.' AND  customerID = '.$cust.' ' ;
        if (!mysqli_query($connection, $queryy)) {
    	    die("Error: insert failed" . mysqli_error($connection));
        }
	echo("quantity updated!");
      
   }
   else if (check2 == 0 && $quan > 0){	
  	 $query = 'INSERT INTO quantityPurchased VALUES("' . $prod . '","' . $cust . '","' . $quan . '")';	
  	 if (!mysqli_query($connection, $query)) {
            die("Error: insert failed" . mysqli_error($connection));
        }

 	 echo "Your purchase was added!";
  
   }
  
   else{
	die("Quantity must be greater than 0");
   }	

   $q = "SELECT * FROM quantityPurchased";
   $r = mysqli_query($connection,$q);
   if (!$r) {
   	  die("databases query failed.");
   }
   echo "<ol>";
   echo "customerID, productID, quantity respectively";
   while ($row = mysqli_fetch_assoc($r)) {
   	 echo "<li>";
    	 echo $row["customerID"]. ", " . $row["productID"] . ", " . $row["quantitySold"] . "</li>";
   }


   mysqli_close($connection);



?>
</ol>
</body>
</html>
