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
				<button id="book" class="btn-primary bold uc">Book now</button>
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
		<div id="book-modal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close"><a href="#"><i class="fa fa-close"></i></a></span>
					<h2>Book <span class="uc bold"><?=$place['name']?></span></h2>
				</div>
				<div class="modal-body">
					<p>Some text in the Modal Body</p>
					<p>Some other text...</p>
				</div>
				<div class="modal-footer">
					<h3>Modal Footer</h3>
				</div>
			</div>
		</div>
	</main>
<?php include './partials/footer.php'; ?>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHPnkz7R1qmZA0KnYphb8k0HEBRxMbN6U&callback=googleMaps.init">
    </script>
</body>
</html>