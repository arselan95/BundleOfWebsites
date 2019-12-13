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


$id = $_POST[id];

$sql = "DELETE FROM product_reviews
WHERE id = $id;";

echo $id."\n";
if (!$conn->query($sql))
{
    die("Error: " . $conn->connect_error);
    die("Error: " . $sql);
}else{
    echo "Successful.";
}
// echo $sql;
// echo "1 record added";

$conn->close();

// echo "<script> location.href='users.php'; </script>";
// exit;
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

</body>
</html>
