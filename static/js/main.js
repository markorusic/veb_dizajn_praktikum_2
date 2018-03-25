var modals = (function () {

	var config = [
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
		},
		{
			"trigger": "#book-local",
			"modal": "#book-local-modal"
		}
	];

	function _bindEvents () {
		config.forEach(function (modal) {
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

var slider = (function () {

	var _shouldInit = window.location.pathname == '/';

	var activeSlideId = 1;

	var slides = [
		{
			"id": 1,
			"img": "./photos/home-1.jpeg",
			"desc": "We reccomend you to start your weekend little earlier, in club Mr. Stefan Braun! Reserve your place on time!",
			"day": "Wed",
			"date": "24.10"
		},
		{
			"id": 2,
			"img": "./photos/party_2.jpg",
			"desc": "We reccomend you to start your weekend little earlier, in club Mr. Stefan Braun! Reserve your place on time!",
			"day": "Sat",
			"date": "14.09"
		},
		{
			"id": 3,
			"img": "./photos/party_1.jpg",
			"desc": "We reccomend you to start your weekend little earlier, in club Mr. Stefan Braun! Reserve your place on time!",
			"day": "Sun",
			"date": "27.11"
		}
	];

	var $btn = $('.options a');

	function _bindEvents () {
		$btn.on('click', _handleClick);
	}

	function _handleClick (event) {
		event.preventDefault();
		if ($btn.hasClass('next')) {
			_setItem('next');
		}
		else if ($btn.hasClass('prev')) {
			_setItem('prev');
		}
	}

	function _setItem (nextOrPrev) {
		var activeSlideIndex = 0;
		slides.forEach(function (slide, index, arr) {
			if (slide.id == activeSlideId) {
				activeSlideIndex = index
			}
		});

		if (nextOrPrev == 'next') {
			if ((activeSlideIndex + 1) >= slides.length) {
				activeSlideId = slides[0].id
			}
			else {
				activeSlideId = slides[activeSlideIndex + 1].id
			}
		}
		else {
			if ((activeSlideIndex - 1) == 0) {
				activeSlideId = slides[slides.length - 1].id
			}
			else {
				activeSlideId = slides[activeSlideIndex - 1].id
			}
		}

		_renderActiveSlide();
	}

	function _renderActiveSlide () {
		var slide = slides.find(function (slide) {
			return slide.id == activeSlideId;
		});
		$('.date .dayy').text(slide.day);
		$('.date .datee').text(slide.date);
		$('.desc').text(slide.desc);
		$('.slider-items img').attr('src', slide.img);
	}

	return {
		init: function () {
			if (_shouldInit) {
				_bindEvents();
			}
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
	slider.init();
	palceFilter.init();	
});