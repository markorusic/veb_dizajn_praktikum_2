<?php 

$places = json_decode(file_get_contents('./content/data/bgnocu.json'), true);

$categories = getCategories($places);

function getCategories ($places) {
	$categories = [];
	foreach ($places as $i => $place) {
		$placeCategory = $place['category'];
		if (!in_array($placeCategory, $categories)) {
			array_push($categories, $placeCategory);
		}
	}
	return $categories;
}

function getByCategory ($places, $category) {
	return array_filter($places, function ($place) use ($category) {
		return $place['category'] == $category;
	});
}

function getBySlug ($places, $slug) {
	foreach ($places as $place) {
		if ($place['slug'] == $slug) {			
			return $place;
		}
	}
	return null;
}

function loc($place, $arg = 'lat') {	
	$cord = $place[$arg];	
	if (is_null($cord) || strlen($cord) == 0) {
		if ($arg == 'lat') {
			$cord = '44.787197';
		}
		else {
			$cord = '20.457273';	
		}
	}
	return $cord;
}