<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<title>Jude</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>JUDE</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#services" class="w3-bar-item w3-button">Services</a>
      <a href="#about" class="w3-bar-item w3-button">About & Company Contacts</a>
	   <a href="#news" class="w3-bar-item w3-button">News</a>
      <a href="#contact" class="w3-bar-item w3-button">Create an Account</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1250px;" id="home">
  <img class="w3-image" src="images/city2.jpg"  width="1500" height="400">
  <div class="w3-display-middle w3-margin-top w3-center">
  <a href="#contact" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Become a member</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
	</a>
  <a href="loginpage.php" class="w3-bar-item w3-button">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Login</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
  </a>
  </div>
</header>

<!-- Page content -->

_END;


echo <<<_END
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About & Company contacts</h3>
	
    <h5>Welcome to Jude where you can post images and details to buy and sell products by posting images. Jude is a website where you can buy things, browse them by categories and post images of things that you would like to sell.<br>
	Upon becoming a member, your timeline is the "feed" where you can just browse through items which are for sale if you do not want to browse by categories.<br> If you are not a member you can still explore our page by looking at popular hot deals posted. You can also post something through your timeline. 
    </h5>
	
	 <h5>Arselan is the CEO of JUDE. He is currently stuyding at San Jose State University. He is taking CMPE 272 with Professor Richard Sinn. 
    </h5>
  </div>

	
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
  
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Become a member</h3>
    <p>Create an account</p>
    <form action="signuppage.php" method="post">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="firstName">
      <input class="w3-input w3-section w3-border" type="text" placeholder="username" required name="userName">
      <input class="w3-input w3-section w3-border" type="text" placeholder="password"  required name="password">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> LETS SHOP
      </button>
    </form>
  </div>
  
</body>
_END;

 if (isset($_POST['firstName']) && isset($_POST['userName']) &&isset($_POST['password']))
 {
		$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
		$userName = mysqli_real_escape_string($conn, $_POST['userName']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$query = "INSERT INTO customer VALUES(NULL,'$firstName','$userName',SHA1('$password'))";
		$result = $conn->query($query);
		if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
		
		header("location: loginPage.php");
 }

?>