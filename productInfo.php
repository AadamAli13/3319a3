<?php
$query = "SELECT description, cost FROM products ORDER BY description ASC";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["description"]. ", " . $row["cost"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
