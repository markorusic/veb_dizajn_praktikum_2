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
		<h1><?=$place['name']?></h1>
	</main>
<?php include './partials/footer.php'; ?>	
</body>
</html>