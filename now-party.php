<?php 
	include './content/content.php'; 
	include './partials/header.php';
?>
	<main id="now-party">
		<div class="place-category-filter">
			<h2>Where do you want to go? (<?=count($places)?>)</h2>
			<ul class="flex-list-row">
				<?php foreach ($categories as $i => $category): ?>
					<li><a href="#"><?=$category?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="palces">
			<?php foreach ($categories as $category): ?>
				<h3><?=$category?></h3>
				<hr>
				<?php 
					$places = getByCategory($places, $category);
					foreach ($places as $place):
				?>
					<div class="place-preview">
						<h3><?=$place['name']?></h3>
						<!-- <small><?=$place['category']?></small> -->
					</div>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</div>
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>