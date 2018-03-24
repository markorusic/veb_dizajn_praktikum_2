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
					<h2 class="uc bold">Book <span class="text-primary"><?=$place['name']?></span></h2>
				</div>
				<div class="modal-body">
					<form id="book-form">
						<div class="form-control">
							<label for="book-name">Name</label>
							<input type="text" name="email" id="book-name" required placeholder="Please enter your name...">
						</div>
						<div class="form-control flex-sp-between">
							<label for="book-people">Amount of people</label>
							<select name="people" id="book-people">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3-5">3-5</option>
								<option value="6-10">6-10</option>
							</select>
						</div>
						<div class="form-control">
							<label for="book-phone">Contact phone</label>
							<input type="text" name="phone" id="book-phone" required placeholder="Please enter your contact phone...">
						</div>
						<div class="form-control flex-sp-between">
							<label for="book-table">Bar table or separe</label>
							<select name="table" id="book-table">
								<option value="bar_table">Bar table</option>
								<option value="separe">Separe</option>
							</select>
						</div>
						<div class="form-control">
							<textarea name="note" id="book-note" placeholder="Note..."></textarea>
						</div>
					</div>
				</form>	
				<div class="modal-footer">
					<button form="book-form" type="submit" class="btn-primary submit uc">Book</button>
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