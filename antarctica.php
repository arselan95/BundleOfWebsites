<?php

setcookie("nature", "antarctica", time() + 300, "antarctica.php"); // 86400 = 1 day

$check="cookie is here";
$check1="cookie not";

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//login user
require_once('authenticate.php');

$_SESSION["tmpid"]="";
$tmp= $_SESSION["user"];
$p= $_SESSION["pass"];

$query = "SELECT id from customer where userName='$tmp' and password='$p'";
  $result = $conn->query($query);
  while ($row = $result->fetch_assoc()) {
      //echo "Welcome ".$tmp." , id: ".$row['id']."<br>";
      $_SESSION["tmpid"]=$row['id'];
     }
  if (!$result) echo "SELECT failed: $query<br>" . $conn->error . "<br><br>";

//product
 $query = "SELECT * from webview";
	$result = $conn->query($query);
	while ($row = $result->fetch_assoc()) {
			//echo "Welcome ".$tmp." , id: ".$row['id']."<br>";
			$name=$row['cookiename'];
			$view=$row['views'];
			}
	if (!$result) echo "SELECT failed: $query<br>" . $conn->error . "<br><br>";
	
	if(!isset($_COOKIE['nature']))
{
	$view=$view+1;
	$query = "Update webview set views=$view, lastvisited=now() where cookiename='nature'";
	$result = $conn->query($query);
	if (!$result) echo "SELECT failed: $query<br>" . $conn->error . "<br><br>";
}
else
{
	$query = "Update webview set lastvisited=now() where cookiename='nature'";
	$result = $conn->query($query);
	if (!$result) echo "SELECT failed: $query<br>" . $conn->error . "<br><br>";
	echo "cookie is there";
}


echo <<<_END
<title>Jude</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>JUDE- Antarctica</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <div class="dropdown">
              <button class="w3-bar-item w3-button">$tmp 
               <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
              <a href="logout.php">Logout</a>
              <a href="homepage.php">Home</a>
            </div>
            </div>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1250px;" id="home">
  <img class="w3-image" src="images/antarctica.jpg"  width="1500" height="400">
</header>
_END;

echo <<<_END
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About Antarctica</h3>
    <h5>Welcome to Jude , this is the nature page. Image is Antarctica </h5>
  </div>

  <!--Ratings-->
  <form action="antarctica.php" method="post" accept-charset="utf-8">
    <fieldset class="rating"> <legend>Review this Product</legend>
        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
        <p> Review:</p>
        <textarea name="review" rows="8" cols="40">
       </textarea>
        <p><input type="submit" value="Submit Review"></p>
        <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
        <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
    </fieldset>
</form>
_END;

