$(document).ready(function(){
	//Attach FastClick to eliminate delays for taps on mobile devices.
	FastClick.attach(document.body);
	
	//Hide any transitions from appearing before the page completely loads. 
	$(window).load(function() {
	  $("body").removeAttr('id');
	}); 
	
	/*//Page animations
	$(".animsition").animsition({
		inClass: 'fade-in',
		outClass: 'fade-out',
		inDuration: 1400,
		outDuration: 1000,
		linkElement: '.animsition-link',
		// e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		loading: true,
		loadingParentElement: 'html', //animsition wrapper element
		loadingClass: 'animsition-loading',
		loadingInner: '<img src="' + window.location.protocol + "//" + window.location.host + '/wp-content/themes/tcc/images/loading.svg" />', // e.g '<img src="loading.svg" />'
		timeout: false,
		timeoutCountdown: 5000,
		onLoadEvent: true,
		browser: [ 'animation-duration', '-webkit-animation-duration'],
		overlay : false,
		overlayClass : 'animsition-overlay-slide',
		overlayParentElement : 'body',
		transition: function(url){ window.location.href = url; }
	});*/	
	
	//Lazy load image setup...
	lazyLoad = new LazyLoad({
		elements_selector: '.lazy'
	});

	// Initialize jQuery Selectric
	$('select').selectric();

	// Iniitalize Swiperjs
	const swiper = new Swiper('.mySwiper', {
		// Optional parameters
		loop: true,
		
		// Fade effect with no background color
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},

		// Slides will Auto Switch 
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.icon-forward-arrow',
		  prevEl: '.icon-back-arrow',
		},
	});


	// Add animation for each child element of a parent.
	// animationType: the type of animation to be added
	// dataIdStart: the starting number for the data-id
	// parentPath: the class path of the parent of the children to be animated
	function addAnimationToChildren(animationType, dataIdStart, parentPath) { 
		dataId = dataIdStart; 
		$(parentPath).children().each(function() {
			$(this).addClass("animated " + animationType); 
			$(this).attr('data-id', dataId.toString()); 
			dataId += 1; 
		});
	}
	addAnimationToChildren("fadeInUp", 1, "#home-hero-container .home-hero-content-container .wp-content");
	
});