<?php 
	include './content/content.php'; 	

	$slug = $_GET['slug'];

	if (is_null($slug)) {
	    include('errors/400.php');
	    die();
	}

	$place = getBySlug($places, $slug);

	if (is_null($place)) {
		include('errors/404.php');
	    die();
	}

	include './partials/header.php';
?>
	<main id="places">		
		<div class="place flex-sp-around">
			<div class="featured-img">
				<img class="fluid" src="./photos/party_1.jpg" alt="<?=$place['name']?> party photo">
				<p><?=$place['address']?></p>
			</div>
			<div class="info">
				<h1><?=$place['name']?></h1>
				<p><?=$place['desc']?></p>
				<button id="book" class="btn-primary uc">Book</button>
			</div>
		</div>
		<div class="events flex-sp-around">
			<table class="flex-half">
			  <tr>
			  	<th></th>
			    <th>Hours</th>
			    <th>Program</th>
			  </tr>
			  <?php foreach ($place['events'] as $event): ?>
			  	<tr>
				    <td><?=$event['day']?></td>
				    <td><?=$event['hours']?></td>
				    <td><?=$event['program']?></td>
			  	</tr>
			  <?php endforeach; ?>			  
			</table>
			<div class="flex-half"></div>			
		</div>
		<div class="flex-center">
			<hr class="separate">
		</div>		
		<div class="flex-center">
			<div id="map" data-lat="<?=loc($place, 'lat')?>" data-lng="<?=loc($place, 'lng')?>"></div>
		</div>		
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>