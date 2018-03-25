<?php 
	
	$page_title = 'Home page';
	$page_description = 'Belgrade party now. Here you can find everything about Belgrade\'s nightlife.';

	include './partials/header.php';
?>
	<main id="home">
		<div class="slider">
			<div class="home-overlay"></div>
			<div class="slider-items">
				<img src="./photos/home-1.jpeg">
			</div>
			<div class="info flex-center-col">
				<div class="date">
					<span class="dayy uc">Wed</span>
					<span class="datee suc">24.10</span>
				</div>				
				<p class="desc text-center">We reccomend you to start your weekend little earlier, in club Mr. Stefan Braun! Reserve your place on time!</p>
				<a href="/places.php?slug=club-stefan-braun" class="btn-primary">More</a>
			</div>
			<div class="options">
				<a href="#" class="prev btn-dark">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a href="#" class="next btn-dark">
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>