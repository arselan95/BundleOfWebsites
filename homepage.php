<?php
$conn = mysqli_connect('localhost', 'u502517039_ebup', '123123', 'u502517039_ebup');
if ($conn->connect_error) die($conn->connect_error);

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
    <a href="#home" class="w3-bar-item w3-button"><b>JUDE</b></a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#services" class="w3-bar-item w3-button">Your Services</a>
      <a href="#about" class="w3-bar-item w3-button">Company Contacts</a>
	   <a href="#news" class="w3-bar-item w3-button">News</a>
      <div class="dropdown">
              <button class="w3-bar-item w3-button">Welcome, $tmp 
               <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
              <a href="logout.php">Logout</a>
            </div>
            </div>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1250px;" id="home">
  <img class="w3-image" src="images/city2.jpg"  width="1500" height="400">
  <div class="w3-display-middle w3-margin-top w3-center">
  <a href="" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Welcome, $tmp</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
	</a>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Services Section -->
  <div class="w3-container w3-padding-32" id="services">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Services</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  <a href="antarctica.php" class="w3-bar-item w3-button">
        <div class=" w3-center w3-padding w3-black w3-opacity-min">Nature</div>
        <img src="images/sell.jpg" alt= "Sell" style="width:100%"></a>
      </div>
    </div>
   
  
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  <a href="cartoon.php" class="w3-bar-item w3-button">
        <div class=" w3-center w3-padding w3-black w3-opacity-min">cartoon</div>
        <img src="images/sell.jpg" alt= "Sell" style="width:100%"></a>
      </div>
    </div>
	
    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  <a href="cooleboards.com" class="w3-bar-item w3-button">
        <div class=" w3-center w3-padding w3-black w3-opacity-min">E-Board shop</div>
        <img src="images/eboard.jpg" alt= "Sell" style="width:100%"></a>
      </div>
    </div>
    
    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  <a href="aquilazhao.tech" class="w3-bar-item w3-button">
        <div class=" w3-center w3-padding w3-black w3-opacity-min">Online tutors platform</div>
        <img src="images/header.jpg" alt= "Sell" style="width:100%"></a>
      </div>
    </div>

_END;


echo <<<_END
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Company contacts</h3>
	
    
  </div>
	<a href="contactslogin.php" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Click here to see Private contacts</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
	</a>
	
	<a href="myusers.php" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Click here to see My company contacts</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
	</a>
	
	<a href="allusers.php" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Click here to see all companies contacts</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
	</a>
	
  <!-- News Section -->
  <div class="w3-container w3-padding-32" id="news">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">News</h3>
	
    <h5>Here are the Links to the latest news about our company. 
    </h5>
	
	<div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	  <a href="#" class="w3-bar-item w3-button">
        <div class=" w3-padding w3-opacity-min ">JUDE's new webpage</div>
        <img src="images/sun.png" alt="Sell" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
	    <a href="news_newceo.html" class="w3-bar-item w3-button">
        <div class="w3-padding  w3-opacity-min ">JUDE assigns Arselan as new CEO</div>
        <img src="images/ceo.jpg" alt="Category" style="width:100%"></a>
      </div>
    </div>
  </div>
    
  <!-- Contact Section -->
  
  

  
</body>
_END;
//
// if (isset($_POST['firstName']) && isset($_POST['userName']) &&isset($_POST['password']))
// {
//		$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
//		$userName = mysqli_real_escape_string($conn, $_POST['userName']);
//		$password = mysqli_real_escape_string($conn, $_POST['password']);
//		$query = "INSERT INTO customer VALUES(NULL,'$firstName','$userName',SHA1('$password'))";
//		$result = $conn->query($query);
//		if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
//
//		header("location: loginPage.php");
// }
 

?>