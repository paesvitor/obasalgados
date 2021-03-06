$( document ).ready(function() {
	var header_height = $(".go-navbar").outerHeight();
	$(".go-header").height(header_height);

	/////////////////// Carousel Init ///////////////////

	$('.owl-slider').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		autoplay:false,
		autoplayTimeout: 4000,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

	/////////////////// Google Font Imports ///////////////////

	WebFontConfig = {
		google: { families: [ 'Open+Sans:300,400,500,700,900','Oswald:300,400,500,600,700' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();


	/////////////////// Css Hamburg Init ///////////////////

	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

	var hamburgers = document.querySelectorAll(".hamburger");
	if (hamburgers.length > 0) {
		forEach(hamburgers, function(hamburger) {
			hamburger.addEventListener("click", function() {
				this.classList.toggle("is-active");
				$(".overlay-navigation").fadeToggle(300, function() {

				});
			}, false);
		});
	}

	/////////////////// Go To Div ///////////////////

	$(".navbar-option").click(function() {
		$(".hamburger").trigger('click');
		var div = $(this).find('a').attr('href');
		console.log(div);
		$('html, body').animate({
			scrollTop: $(div).offset().top
		}, 1500);
	});

	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	});

	$(".go-to").click(function(event) {
		var div = $(this).attr('data-href');
		console.log(div);
		$('html, body').animate({
			scrollTop: $(div).offset().top -300
		}, 1500);
	});

	/////////////////// Add to cart ///////////////////


	// $("#orders").append('<input id="empty" type="text" class="empty form-control" disabled="disabled" value="Carrinho Vazio">');


	// $(".add-to-cart").on('click', function(event) {
	// 	event.preventDefault();

	// 	$("#empty").remove();

	// 	var product_id = $(this).find('.product_id').attr('id');
	// 	var product_name = $(this).find('.product_id').attr('data-name');

	// 	console.log(product_name);

	// 	$("#orders").append('<input type="text" name="order" class="order form-control" disabled="disabled" value="'+product_name+'">');
	// });

	/////////////////// WOW JS///////////////////

	var wow = new WOW(
	{
	    boxClass:     'wow',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       true,       // trigger animations on mobile devices (default is true)
	    live:         true,       // act on asynchronously loaded content (default is true)
	    callback:     function(box) {
	      // the callback is fired every time an animation is started
	      // the argument that is passed in is the DOM node being animated
	  },
	    scrollContainer: null // optional scroll container selector, otherwise use window
	}
	);
	wow.init();

	$(".animated").addClass('wow bounceInUp');

});