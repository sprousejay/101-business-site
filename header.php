<!DOCTYPE html>
<html>
<head>
	<title>Fiona Massage Salon</title>
	<link rel="stylesheet" type="text/css" href="banana.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
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
			<a href="services.php" class="nav__link <?php isCurrentPage('
			Services', $currentPage); ?>">Services</a>
			<a href="contact.php" class="nav__link">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>