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
			<a href="homepage.php" class="nav__link"<?php isCurrentPage('
			Home', $currentPage); ?>">Home</a>
			<a href="pricing.php" class="nav__link"<?php isCurrentPage('
			Pricing', $currentPage); ?>">Pricing</a>
			<a href="masseurs.php" class="nav__link"<?php isCurrentPage('
			Masseurs', $currentPage); ?>">Masseurs</a>
			<a href="services.php" class="nav__link"<?php isCurrentPage('
			Services', $currentPage); ?>">Services</a>
			<a href="contacts.php" class="nav__link"<?php isCurrentPage('
			Contacts', $currentPage); ?>">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>