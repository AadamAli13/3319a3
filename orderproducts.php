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
<h1>Here the products!</h1>
<ol>
<?php
   
   $query = 'SELECT description, cost FROM products ORDER BY description DESC';
   $queryy = 'SELECT description, cost FROM products ORDER BY cost DESC';
   $queryyy = 'SELECT description, cost FROM products ORDER BY description ASC';
   $queryyyy = 'SELECT description, cost FROM products ORDER BY cost  ASC';
   
   
   $selected = $_POST['order'];
if( isset($selected)){
   if ($_POST['order'] == 'dn'){
  	 $result=mysqli_query($connection,$query);
   	 if (!$result) {
        	 die("database query2 failed.");
    	 }
   	 while ($row=mysqli_fetch_assoc($result)) {
    	    echo '<li>';
    	    echo $row["description"] . ", " .
	    $row["cost"];
    	 }
    	 mysqli_free_result($result);
   }
  elseif ($_POST['order'] == 'dc'){
         $result2=mysqli_query($connection,$queryy);
         if (!$result2) {
                 die("database query2 failed.");
         }
         while ($row=mysqli_fetch_assoc($result2)) {
            echo '<li>';
            echo $row["description"] . ", " .
            $row["cost"];
         }
         mysqli_free_result($result2);
    }  
   elseif ($selected == "an"){
         $result=mysqli_query($connection,$queryyy);
         if (!$result) {
                 die("database query2 failed.");
         }
         while ($row=mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo $row["description"] . ", " .
            $row["cost"];
         }
         mysqli_free_result($result);
   }
   elseif ($selected == "ac"){
         $result=mysqli_query($connection,$queryyyy);
         if (!$result) {
                 die("database query2 failed.");
         }
         while ($row=mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo $row["description"] . ", " .
            $row["cost"];
         }
         mysqli_free_result($result);
   }
}
    
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>


