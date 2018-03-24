<?php 
	include './content/content.php'; 
	include './partials/header.php';
?>
	<main id="now-party">
		<div class="places-filter">
			<h1 class="uc">Where do you want to go?</h1>
			<ul class="flex-list-row">
				<li><a href="#" class="active">Everywhere</a></li>
				<?php foreach ($categories as $category): ?>
					<li><a href="#"><?=$category?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="places">
			<?php foreach ($places as $place): ?>
				<div class="place-item-wrapper" 
					data-category="<?=$place['category']?>"
				>
					<a href="/places.php?slug=<?=$place['slug']?>">
						<div class="palce-item"
							style="background-image: url('<?=$place['logo']?>')"
						>
							<div class="overlay"></div>
							<div class="place-content flex-center">
								<h3 class="text-center uc"><?=$place['name']?></h3>
							</div>
						</div>
					</a>
				</div>				
			<?php endforeach; ?>
		</div>
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>