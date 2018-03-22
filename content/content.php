<?php 

$places = json_decode(file_get_contents('./content/bgnocu.json'), true);

$categories = getCategories($places);

function getCategories ($places) {
	$categories = [];
	foreach ($places as $i => $place) {
		$placeCategory = $place['category'];
		if(!in_array($placeCategory, $categories))
			array_push($categories, $placeCategory);
	}
	return $categories;
}

function getByCategory ($places, $category) {
	return array_filter($places, function ($place) use ($category) {
		return $place['category'] == $category;
	});
}

function getBySlug ($places, $slug) {

}