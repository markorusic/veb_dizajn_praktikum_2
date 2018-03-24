var modals = (function () {

	var modalsData = [
		{
			"trigger": ".auth .login",
			"modal": "#login-modal"
		},
		{
			"trigger": ".auth .register",
			"modal": "#register-modal"
		},
		{
			"trigger": "#book",
			"modal": "#book-modal"
		}
	];

	function _bindEvents () {
		modalsData.forEach(function (modal) {
			$(modal.trigger).on('click', function(event) {
				event.preventDefault();
				var $modal = $(modal.modal);
				_showModal($modal);
			});
		});
	}

	function _showModal ($modal) {
		$modal.show();
		$modal.find('.close').on('click', _closeModal);
		$modal.on('click', _closeModal);
		$modal.find('.modal-content').on('click', function (event) {
			event.stopPropagation();
		});
	}

	function _closeModal (event) {
		event.preventDefault();
		event.stopPropagation();
		$('.modal').fadeOut();
	}

	return {
		init: function () {
			_bindEvents();
		}
	}
})();

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

var googleMaps = (function () {

	var _shouldInit = window.location.pathname == '/places.php';
	var $map = $('#map');

	function _drawMap () {
		var uluru = $map.data();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru          
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
	}

	return {
		init: function () {
			if (_shouldInit) {
				_drawMap();
			}
		}
	}
})();

$(function () {
	$('a[href="' + window.location.pathname + '"]').parent().addClass('active');
	modals.init();
	palceFilter.init();	
});