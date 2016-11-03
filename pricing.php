<?php
	$currentPage = "Pricing";
	function isCurrentPage(){
		if ($pageName == $currentPage) {
			echo "nav__link--Active";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fiona Massage Salon</title>
	<link rel="stylesheet" type="text/css" href="banana.css">
</head>
<body>

	<div class="header">
		<a href="hompage.html">
			<img src="images/logo.png" class="header-image">
		</a>
		<div class="nav">
			<a href="homepage.php" class="nav__link">Home</a>
			<a href="pricing.php" class="nav__link <?php isCurrentPage('Pricing', $currentPage); ?>">Pricing</a>
			<a href="masseurs.php" class="nav__link">Masseurs</a>
			<a href="services.php" class="nav__link">Services</a>
			<a href="contacts.php" class="nav__link">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>


	<div class="footer"><a href="hompage.html">
			<div class="home-icon"><img src="images/logo.png"></a></div>
			
			<div class="store_info">
				<div class="contact">Call Today:<br>
				555-123-5353<br>
				555-12-2323<br>
				</div>
				
				<div class="contact">Email:<br>
				<a href="mailto:youremailaddress">info@demolink.org</a><br>
				</div>
				
				<div class="contact">Address:<br>
				1163 N State St. Chicago,<br>
				IL 60610, United States<br>
				</div>

				<div class="contact">Opening Hours:<br>
				Mon-Fri:9am-6pm;<br>
				Sun:10am-1pm<br>
				</div>
			</div>
		</div>
</body>
</html>