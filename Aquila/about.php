<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>About</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
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

<body class="archive-page">
	<div class="wrap-body">
		<header>
			<div id="cssmenu" >
				<ul>
					<li class="active"><a href="index.html"><span>Home</span></a></li>
					<li><a href="about.php"><span>About</span></a></li>
					<li><a href="services.php"><span>Service</span></a></li>
					<li><a href="news.php"><span>News</span></a></li>
					<li><a href="contact.php"><span>Contact</span></a></li>
					<li class="last"><a href="login.html"><span>Login</span></a></li>
				</ul>
			</div>

		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-content">
                <div class="crumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
				<article class="single-post">
					<div class="art-header">
						<h1 class="entry-title">About Us</h1>
					</div>
					<div class="art-content">
						<?php
							$file_path = "about.txt";
							if(file_exists($file_path)){
								$fp = fopen($file_path,"r");
								$str = fread($fp,filesize($file_path));
								echo $str = str_replace("\r\n","<br />",$str);
								fclose($fp);
							}
						?>

					</div>
				</article>
			</div>
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