<?php

  function isCurrentPage($active, $currentPage) {
   if ($nav__link == $currentPage) {
    echo "nav__link--active";
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fiona Massage Salon</title>
	<link rel="stylesheet" type="text/css" href="banana.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

</head>
<body>

	<div class="header">
		<a href="home.php">
			<img src="images/logo.png" class="header-image">
		</a>
		<div class="nav">
			<a href="home.php" class="nav__link <?php isCurrentPage('home', $currentPage); ?>">Home</a>
			<a href="pricing.php" class="nav__link <?php isCurrentPage('pricing', $currentPage); ?>">Pricing</a>
			<a href="masseurs.php" class="nav__link <?php isCurrentPage('masseurs', $currentPage); ?>">Masseurs</a>
			<a href="services.php" class="nav__link <?php isCurrentPage('services', $currentPage); ?>">Services</a>
			<a href="contacts.php" class="nav__link <?php isCurrentPage('contacts', $currentPage); ?>">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>