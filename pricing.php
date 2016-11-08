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
				<p class="description">Our pre and postnatal massages have proven to be effective and absolutely safe, both for women and their unborn babies...</p>
			</div>
			<div>
				<div class="booker"><a href="booking.php" class="nav__link--booking">Book an appointment</a></div>
			</div>
		</div>

		<div class="special-prices">
			<div> 
				<div class="special-prices__option">Intensive Massage Sessions</div>
			</div>
			<div>
				<div class="special-prices__cost">$400</div>
				<div class="special-prices__sessions">4 SESSIONS</div>
			</div>
			<div>
				<p class="special-prices__description">This massage category if our most popular one and for a good reason. It gives you a completely refreshing experince!</p>
			</div>
			<div>
				<div class="special-prices__booker"><a href="booking.php" class="special-prices__nav__link--booking">Book an appointment</a></div>
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
				<p class="description">Try our "Hot Stones" or "Stones and Sticks" massages, which are both fun and good for your overall health and wellbeing!</p>
			</div>
			<div>
				<div class="booker"><a href="booking.php" class="nav__link--booking">Book an appointment</a></div>
			</div>
		</div>
	</div>

	<div>
		<div class="call">Call us now to book a relaxing massage session!</div>

		<div class="telephone">
			<i class="fa fa-phone call__image"></i><span class="phone">555-123-2322</span>
		</div>

		<div class="dinero">
			<spanclass="service-cost">Service Cost:</span><span class="money">$99.00</span>
		</div>

		<div class="duration">Duration: 1h 20m</div>
	</div>


	<div class="customers">
		<div class="happy">What our happy customers say:</div>
		
		<div class="quote"><img src="images/quote.png"></div>


		<div class="men">Men rarely acknowledge how much they love to get a massage... But I want to say, that without my afterwork Friday massage sessions here, my productivity would've been so much lower...</div>

		Rhode Gentlebear
	</div>

	
	<div class="here">See a full list of our services here:
	</div>

	

	<div class="list">

		<div class="list__image">
			<img src="images/services-02.jpg">
			<div class="style">Swedish Massage</div>
		</div>

		<div class="list__image">
			<img src="images/index-13.jpg">
			<div class="style">Deep Tissue Massage</div>
		</div>

		<div class="list__image">
			<img src="images/services-04.jpg">
			<div class="style">Hot Stones Therapy</div>
		</div>

		<div class="see">See all Services</div>
		
	</div>
		



	<?php include 'footer.php';?>