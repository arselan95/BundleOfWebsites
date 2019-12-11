<?php
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

echo <<<_END
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="author" content="">
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
    
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
    
</head>
<body class="home-page">
    <div class="wrap-body">
        <header>
            <div id="cssmenu" >
                <ul>
                    <li class="active"><a href="index.php"><span>Home</span></a></li>
                    <li><a href="about.php"><span>About</span></a></li>
                    <li><a href="services.php"><span>Service</span></a></li>
                    <li><a href="news.php"><span>News</span></a></li>
                    <li><a href="contact.php"><span>Contact</span></a></li>
                </ul>
                <div class="dropdown">
              <button class="w3-bar-item w3-button"> Welcome, $tmp 
               <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
              <a href="logout.php">Logout</a>
              <a href="homepage.php">Home</a>
            </div>
            </div>
            </div>
            <div class="header-banner zerogrid" style="width: 100%;">
                <div class="row">
                    <div class="col-2-3">
                        <img src="images/header.jpg">
                    </div>
                    <div class="col-1-3">
                        <div class="header-text">
                            <h1>Morbi tristique senectus et</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
                            <a class="button button-header" href="index.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--////////////////////////////////////Container-->
        <section id="container">
        </section>
        <!--////////////////////////////////////Footer-->
        <footer>
            <div class="copyright">
                <div class="zerogrid wrapper">
                    Copyright &copy; 2019.Company name All rights reserved.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
_END;
?>