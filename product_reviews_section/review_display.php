<html>
<body>
<!-- $creat_query="CREATE TABLE IF NOT EXISTS product_reviews(id int NOT NULL AUTO_INCREMENT , product_id INT NOT NULL, product_type int, rating FLOAT, feedback varchar(400), PRIMARY KEY (id));" -->

<?php include_once('db_config/database.php');
include_once('review_styles.css');
?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// //create new table if the table is not exists.
$query="SELECT * FROM product_reviews WHERE product_id =$product_id AND product_type = $product_type;";
$result = $conn->query($query);
// echo $query."---<br>";


if ($result->num_rows > 0) {
	echo "<table class = 'review' border = '5' align='center'><tr>
	<th class = 'review'>ID</th>
	<th class = 'review'>User</th>
	<th class = 'review'>rating</th>
	<th class = 'review'>feedbacks</th>
	<th class = 'review'>Actions</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
      $enable = "";
      if($user == $row['user']){
        $enable = "enabled";
      }else{
        $enable = "disabled";

      }
    	echo "<tr class ='review'>";
    	echo "<td class ='review'>". $row['id'] . "</td>";
    	echo "<td class ='review'>". $row['user'] . "</td>";
    	echo "<td class ='review'>". $row['rating'] . "</td>";
    	echo "<td class ='review'>". $row['feedback'] . "</td>";
      echo "<td class ='review'>";
      echo "<form action='product_reviews_section/delete_review.php' method='post' accept-charset='utf-8'>";
      echo "<input type='hidden'  name='id' value=".$row['id']. " id='user'>";

      // echo "confirm('sure?');";

      echo "<p><input type='submit' value='Delete' ".$enable." onclick=\"return confirm('Are you sure?')\"></p >";



      echo "</form>";
      echo "</td>";
    	echo "</tr>";
    }
 	echo "</table>";
} else {

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
