<?php
session_start();
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);

echo <<<_END
<title>Jude</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
_END;

$_SESSION["user"]="";
$_SESSION["pass"]="";

if (isset($_POST['username']) && isset($_POST['password']))
{
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 $passwordunhash=SHA1($password);
	 echo $passwordunhash."</br>";
	
	$query = "SELECT userName from customer where userName='$username'";
		$result1 = $conn->query($query);
		while ($row = $result1->fetch_assoc()) {
			echo $row['userName']."<br>";
			$_SESSION["user"]=$row['userName'];
			}
			
			
			$query = "SELECT password from customer where password='$passwordunhash'";
		$result2 = $conn->query($query);
		while ($row = $result2->fetch_assoc()) {
			echo $row['password']."<br>";
			$_SESSION["pass"]=$row['password'];
			}
			
	
	
	if ($username==$_SESSION["user"] && $passwordunhash===$_SESSION["pass"])
	{
		session_start();
        $_SESSION["authenticated"] = 'true';
		header("location: homepage.php");
	}
	else
	{
		$message = "Incorrect Username or Password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

echo <<<_END
<div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Log in to continue to your homepage</h3>
    <form action="loginpage.php" method="post">
      <input class="w3-input w3-border" type="text" placeholder="username" name="username">
      <input class="w3-input w3-section w3-border" type="password" placeholder="password" name="password">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> LOGIN
      </button>
    </form>

    <form action="signuppage.php" method="post">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> Not a Member? Sign Up
      </button>
    </form>
  </div>
</body>
_END;
?>
