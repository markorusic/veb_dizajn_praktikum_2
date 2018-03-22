var palceFilter = (function () {

	// state
	var _shouldInit = window.location.pathname == '/now-party.php';
	var activeCategory = null;

	// cache DOM
	var $root = $('main#now-party');
	var $filterItems = $root.find('.places-filter ul li a');
	var $places = $root.find('.place-item-wrapper');

	function _bindEvents () {
		$filterItems.on('click', _handleFilterClick);
	}

	function _handleFilterClick (event) {
		event.preventDefault();
		var $el = $(event.target);
		var category = $el.text();
		$filterItems.removeClass('active');
		$el.addClass('active');
		_setActiveCategory(category);
	}

	function _setActiveCategory (category) {
		if(category == 'Everywhere') {
			activeCategory = null
		}
		else {
			activeCategory = category
		}
		_renderFilterdPlaces()
	}

	function _renderFilterdPlaces () {
		if (!activeCategory) {
			$places.fadeIn();
			return null
		}
		$places.each(function(index, place) {
    		var category = place.dataset.category;
    		if(category != activeCategory)
    			$(place).fadeOut();
    		else
    			$(place).fadeIn();
    	});
	}

	return {
		init: function () {
			if(_shouldInit) {
				_bindEvents();
			}			
		}
	}

})();

$(function () {
	$('a[href="' + window.location.pathname + '"]').parent().addClass('active');
	palceFilter.init();
});