<?php
	$currentPage = "Pricing";
	function isCurrentPage(){
		if ($pageName == $currentPage) {
			echo "nav__link--Active";
		}
	}
?>

	<?php include 'header.php';?>

	<div class="package">
		<div class="prices">
			<div>
				<div class="option">Pre and Postnatal Massages</div>
			</div>
			<div>
				<div class="cost">$300</div>
				<div class="sessions">4 SESSIONS</div>
			</div>
			<div>
				<p>Our pre and postnatal massages have proven to be effective and absolutely safe, both for women and their unborn babies...</p>
			</div>
			<div>
				<a href="booking.php" class="nav__link--booking">Book an appointment</a>
			</div>
		</div>

		<div class="prices">
			<div> 
				<div class="option">Intensive Massage Sessions</div>
			</div>
			<div>
				<div class="cost">$400</div>
				<div class="sessions">4 SESSIONS</div>
			</div>
			<div>
				<p>This massage category if our most popular one and for a good reason. It gives you a completely refreshing experince!</p>
			</div>
			<div>
				<a href="booking.php" class="nav__link--booking">Book an appointment</a>
			</div>
		</div>

		<div class="prices">
			<div>
				<div class="option">Extravagant and fun-spirited</div>
			</div>
			<div>
				<div class="cost">$500</div>
				<div class="sessions">4 SESSIONS</div>
			</div>
			<div>
				<p>Try our "Hot Stones" or "Stones and Sticks" massages, which are both fun and good for your overall health and wellbeing!</p>
			</div>
			<div>
				<a href="booking.php" class="nav__link--booking">Book an appointment</a>
			</div>
		</div>
	</div>

	<div>
	Call us now to book a relaxing massage session!

	555-123-2322

	Service Cost: $99.00

	Duration 1h 20m
	</div>


	<div>
		What our happy customers say:
		<i class="fa fa-phone contact__image"></i>

		Men rarely acknowledge how much they love to get a massage... But I want to say, that without my afterwork Friday massage sessions here, my productivity would've been so much lower...

		Rhode Gentlebear
	</div>

		



	<?php include 'footer.php';?>