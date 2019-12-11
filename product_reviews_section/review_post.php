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


$product_id = $_POST[product_id];
$product_type = $_POST[product_type];
$rating = $_POST[rating];
$feedback = nl2br($_POST[feedback]);

// //create new table if the table is not exists.
$creat_query="CREATE TABLE IF NOT EXISTS product_reviews(id int NOT NULL AUTO_INCREMENT ,user varchar(30) DEFAULT 'Anonymous', product_id INT NOT NULL, product_type int, rating FLOAT, feedback TEXT, PRIMARY KEY (id));";
$conn->query($creat_query);

// $feedbacks = nl2br($feedback);
str_replace('\n',"?",$feedback);
$sql = "INSERT INTO product_reviews
SET
    product_id=$product_id,
    product_type=$product_type,
    -- user = $user,
    rating=$rating,
    feedback = '$feedback';";
echo $sql."\n";
if (!$conn->query($sql))
{
    die("Error: " . $conn->connect_error);
    die("Error: " . $sql);
}else{
    echo "Successful.";
}
// echo "1 record added";

$conn->close();

// echo "<script> location.href='users.php'; </script>";
// exit;
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

</body>
</html>
