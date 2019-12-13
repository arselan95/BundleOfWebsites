<html>
<body>
<?php 
include_once('login.php');
require_once('authenticate.php');



// Create connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="SELECT * FROM product_reviews Where product_type=3 order by rating DESC LIMIT 5";
$result = $conn->query($query);



echo "<table class = 'review' border = '5' align='center'><tr>
    <th class = 'review'>Product ID</th>
	<th class = 'review'>User</th>
	<th class = 'review'>rating</th>
	<th class = 'review'>feedbacks</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr class ='review'>";
        echo "<td class ='review'>". $row['product_id'] . "</td>";
    	echo "<td class ='review'>". $row['user'] . "</td>";
    	echo "<td class ='review'>". $row['rating'] . "</td>";
    	echo "<td class ='review'>". $row['feedback'] . "</td>";
    	echo "</tr>";
    }
 	echo "</table>";

//else {  echo "0 results"; }

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