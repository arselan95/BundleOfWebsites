<html>
<body>
<!-- $creat_query="CREATE TABLE IF NOT EXISTS product_reviews(id int NOT NULL AUTO_INCREMENT , product_id INT NOT NULL, product_type int, rating FLOAT, feedback varchar(400), PRIMARY KEY (id));" -->

<?php include_once('db_config/database.php');
?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// //create new table if the table is not exists.
$query="SELECT * FROM product_reviews WHERE product_id =$product_id;";
$result = $conn->query($query);
// echo $query."---<br>";


if ($result->num_rows > 0) {
	echo "<table border = '5' class='user_table'><tr>
	<th>User</th>
	<th>rating</th>
	<th>feedbacks</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	echo "<td>". $row['user'] . "</td>";
    	echo "<td>". $row['rating'] . "</td>";
    	echo "<td>". $row['feedback'] . "</td>";
    	echo "</tr>";
    }
 	echo "</table>";
} else {
    echo "0 results";
}












if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - feedbacks: " . $row["feedback"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</body>
</html>
