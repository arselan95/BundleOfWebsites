<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contacts</title>
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

<body class="contact-page">
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
			<div class="wrap-container">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="zerogrid">
					<div class="row">
						<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Contact Us</h1>
						<!--Start Map-->
						<div id="map" style="height: 450px;"></div>
						<!--End Map-->
						<div class="col-1-3">
							<div class="wrap-col">
								<h3 style="margin: 20px 0">Contact Info</h3>
								<p id="content">
									<?php
                    					$file_path = "contacts.txt";
                    					if(file_exists($file_path)){
											$fp = fopen($file_path,"r");
											$str = fread($fp,filesize($file_path));
											echo $str = str_replace("\r\n","<br />",$str);
											fclose($fp);
										}
									?>
								</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 style="margin: 20px 0 20px 30px">Contact Form</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="col-full">
													<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
</body>
</html>