<?php
	$currentPage = "Masseurs";
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
			<a href="masseurs.php" class="nav__link <?php isCurrentPage('Masseurs', $currentPage); ?>">Masseurs</a>
			<a href="services.php" class="nav__link">Services</a>
			<a href="contacts.php" class="nav__link">Contacts</a>
			<a href="booking.php" class="nav__link--booking">Book an appointment</a>
		</div>
	</div>

	<h1>Salon's Team</h1>
	
	<div class="wrapper">
		<div class="masseuse">
			<img src="images/masseurs-04.jpg" class="masseuse_image"></a>
			<h4> Mary Casserole</h4>
			<h5>Salon Owner</h5>
				<p>Mary founded the salon with her own principal capital, which earned by working at other massage salons and saving money for her dream. It makes a statemnet about how powerful and independent individual she is! She is a strong believer in the healing and revitalizing power of the massage therapy.</p>
		</div>

		
		<div class="masseuse">
			<img src="images/masseurs-03.jpg" class="masseuse_image"></a>
			<h4> Elisa Grey</h4>
			<h5>Senior Masseur</h5>
				<p>Elisa's vast range of skills and knowledge lets her work with individuals seeking stress management and general relaxation... Her bag-of-tricks is filled with practical skills she applies to those therapeutic massages that we offer here.</p>
		</div>

		<div class="masseuse">
			<img src="images/masseurs-02.jpg" class="masseuse_image"></a>
			<h4> Caroline Camille</h4>
			<h5>Senior Masseur</h5>
				<p>Her favorite massage techniques include the "Deep Tissue Massage"; "Revitalizing Massage" and our all time hit the full body "Swedish Massage"... 
				Not even once any of our clients had any kinds of complaints about her massage sessions! Quite oppositley, Caroline has the most positive reviews of us all! </p>
		</div>

		<div class="masseuse">
			<img src="images/masseurs-05.jpg" class="masseuse_image"></a>
			<h4> Kimberly Boyle</h4>
			<h5>Junior Masseur</h5>
				<p>Being 24 years old, Kimberly is very knowledgeable and moves on providing a top-notch type of relaxing massage, according to the highest standards, in a pleasant surrounding. It makes her one of our most valuable team members ever, despite her young age!</p>
		</div>
	</div>

	<h1>Contact us</h1>

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
	

	<?php include 'footer.php';?>


