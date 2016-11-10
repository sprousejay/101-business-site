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
			<div class="prices__option">Pre and Postnatal Massages</div>

			<div class="prices__cost">$300</div>

			<div class="prices__sessions">4 SESSIONS</div>

			<p class="prices__description">Our pre and postnatal massages have proven to be effective and absolutely safe, both for women and their unborn babies...</p>

			<div class="prices__booker"><a href="booking.php" class="nav__link--booking">Book an appointment</a></div>
		</div>

		<div class="prices prices--special">
			 
			<div class="prices__option prices__option--special">Intensive Massage Sessions</div>
		
			<div class="prices__cost prices__cost--special">$400</div>
			<div class="prices__sessions prices__sessions--special">4 SESSIONS</div>
		
			<p class="prices__description prices__description--special">This massage category if our most popular one and for a good reason. It gives you a completely refreshing experince!</p>
		
			<div class="prices__booker"><a href="booking.php" class="nav__link--booking prices__nav-link--special">Book an appointment</a></div>
		</div>

		<div class="prices">
			<div class="prices__option">Extravagant and fun-spirited</div>

			<div class="prices__cost">$500</div>
			<div class="prices__sessions">4 SESSIONS</div>

			<p class="prices__description">Try our "Hot Stones" or "Stones and Sticks" massages, which are both fun and good for your overall health and wellbeing!</p>

			<div class="prices__booker"><a href="booking.php" class="nav__link--booking">Book an appointment</a></div>
		</div>
	</div>


	<div class="call">
		Call us now to book a relaxing massage session!
	</div>

	<div class="telephone">
		<i class="fa fa-phone call__image"></i>
		<span class="phone">555-123-2322</span>
	</div>

	<div class="dinero">
		<span class="service-cost">Service Cost:</span>
		<span class="money">$99.00</span>
	</div>

	<div class="duration">
		Duration: 1h 20m
	</div>
	


	<div class="customers">
		<div class="happy">
			What our happy customers say:
		</div>
		
		<img src="images/quote.png">
		<!-- Use a font awesome class instead -->

		<div class="men">Men rarely acknowledge how much they love to get a massage... But I want to say, that without my afterwork Friday massage sessions here, my productivity would've been so much lower...</div>

		<div class="bear">
			Rhode Gentlebear
		</div>
	</div>

	<?php include 'massage.php';?>
		
	<?php include 'footer.php';?>