<?php

	$currentPage = "home.php";

  function isCurrentPage($pageName, $currentPage) {
   if ($pageName == $currentPage) {
    echo "pagesItem--currentPage";
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
			<a href="home.php" class="nav__link"><?php if ($currentPage == 'home') {echo "$currentPage";?>Home</a>
			<a href="pricing.php" class="nav__link">Pricing</a>
			<a href="masseurs.php" class="nav__link">Masseurs</a>
			<a href="services.php" class="nav__link">Services</a>
			<a href="contacts.php" class="nav__link">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>