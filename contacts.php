<?php $currentPage = 'contacts';?>

<?php include 'header.php';?>

<div class="pageContent">
	<div class="reference">

		<p class="reference__title">Find us</p>
			
		<div class="locate">
			<i class="fa fa-map-o contact__image"></i>
			<div>
				<p class="locate__title">Address:</p>
				<p class="locate__details">1163 N State St, Chicago,</p>
				<p class="locate__details">IL 60610, United States</p>
			</div>
		</div>
			
		<div class="locate">
			<i class="fa fa-phone contact__image"></i><p class="contact__title">
			<div>
				<p class="locate__title">Call Us Today:</p>
				<p class="locate__details">555-123-5353</p>
				<p class="locate__details">555-12-2323</p>
			</div>
		</div>
		
		<div class="locate">
			<i class="fa fa-envelope-o contact__image"></i>
			<div>
				<p class="locate__title">Contact e-mail:</p>
				<p class="locate__details">info.demolink.org</p>
			</div>
		</div>


		<div class="locate">
			<i class="fa fa-clock-o contact__image"></i>
			<div>
				<p class="locate__title">Opening Hours:</p>
				<p class="locate__details">Mon-Fri: 9am-6pm;</p>
				<p class="locate__details">Sun: 10am-1pm</p>
				<a href="booking.php" class="nav__link--booking">Book an appointment</a>
			</div>
		</div>
	</div>
	

	<div class="touch">
		<h1>Get in touch with us</h1>
	

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
	</div>
</div>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2969.6170537854923!2d-87.62803629307297!3d41.90109212031367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1478218947632" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
		
	<?php include 'footer.php';?>