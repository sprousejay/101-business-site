<?php
	$currentPage = "Masseurs";
	function isCurrentPage(){
		if ($pageName == $currentPage) {
			echo "nav__link--Active";
		}
	}
?>

<?php include 'header.php';?>

	<img src="images/index-03.jpg" img class="flowers">

	<div class="pros">
		
		<div class="stuff">
			<div class="stuff__title">
				Affordability
			</div>
			<img src="images/index-04.png" img class="stuff__img">

			<div class="what">
				Something good should not always be unattainably priced... We aim to bring the balance to our quality ratio, making it affordable for all citizens of Chicago!
			</div>
		</div>

		<div class="stuff">
			<div class="stuff__title">
				Variety
			</div>
			<img src="images/index-04.png" img class="stuff__img">

			<div class="what">
				Chicago salon features the most diverse and universally fit list of massage types. From intensive sports massage all the way to pre and post natal, or full body...
			</div>
		</div>

		<div class="stuff">
			<div class="stuff__title">
				Flexiblity
			</div>
			<img src="images/index-04.png" img class="stuff__img">

			<div class="what">
				We understand that people rarely have time to go to the message salon during the working day or week... So we work 24/7, on-site and on the weekends as well!
			</div>
		</div>
	</div>


	<img src="images/index-05.jpg" img class="stones">
<?php include 'massage.php';?>

<?php include 'footer.php';?>