<?php
	$currentPage = "Contacts";
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
		<a href="hompage.php">
			<img src="images/logo.png" class="header-image">
		</a>
		<div class="nav">
			<a href="homepage.php" class="nav__link">Home</a>
			<a href="pricing.php" class="nav__link">Pricing</a>
			<a href="masseurs.php" class="nav__link">Masseurs</a>
			<a href="services.php" class="nav__link">Services</a>
			<a href="contacts.php" class="nav__link <?php isCurrentPage('Contacts', $currentPage); ?>">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>

	<h1>Find us</h1>
	<div class="locate">

					<div>
						<p class="contact__title">Call Today:</p>
						<p class="contact__details">555-123-5353</p>
						<p class="contact__details">555-12-2323</p>
					</div>
				</div>
				
				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Email:</p>
						<p class="contact__details">info.demolink.org</p>
					</div>
				</div>

				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Address:</p>
						<p class="contact__details">1163 N State St, Chicago,</p>
						<p class="contact__details">IL 60610, United States</p>
					</div>
				</div>

				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Opening Hours:</p>
						<p class="contact__details">Mon-Fri: 9am-6pm;</p>
						<p class="contact__details">Sun: 10am-1pm</p>
					</div>
				</div>
	</div>
	

	<div class="touch">
	<h1>Get in touch with us</h1>
	</div>

	<form class="contactForm">
		<div class="contactRow">
			<div class="column">
				<label>Your name *</label>
				<input class="formInput" type="text">
			</div>

			<div class="column">
				<label>Subject</label> 
				<input class="formInput" type="text">
			</div>
		</div>

		<label>Email address *</label>
		<input class="formInput" type="text"> 

		<label>Your message *</label>
		<textarea class="formInput"></textarea>

		<input class="sendButton" type="submit" value="Send">
	</form>

		<div class="footer">
			<a href="hompage.php">
				<img src="images/logo.png" class="footer-image">
			</a>
			
			<div class="store-info">
				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Call Today:</p>
						<p class="contact__details">555-123-5353</p>
						<p class="contact__details">555-12-2323</p>
					</div>
				</div>
				
				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Email:</p>
						<p class="contact__details">info.demolink.org</p>
					</div>
				</div>

				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Address:</p>
						<p class="contact__details">1163 N State St, Chicago,</p>
						<p class="contact__details">IL 60610, United States</p>
					</div>
				</div>

				<div class="contact">
					<img class="contact__image">
					<div>
						<p class="contact__title">Opening Hours:</p>
						<p class="contact__details">Mon-Fri: 9am-6pm;</p>
						<p class="contact__details">Sun: 10am-1pm</p>
					</div>
				</div>
			</div>
		</div>
</body>
</html>