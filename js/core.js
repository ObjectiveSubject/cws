
/*	Footer.js
 *	---------------------------------------- */

(function($, window){

	var $window   = $(window),
		$footer   = $('.site-footer'), 
		$content  = $('.site-content'),
		threshold = $content.offset().top + $content.outerHeight() + $footer.outerHeight();

	setFooterClass( 'fixed', threshold );

	$window.on('resize', function(){
		setFooterClass( 'fixed', threshold );
	});

	function setFooterClass( className, threshold ) {
		if ( $window.height() >= threshold ) {
			$footer.addClass(className);
		} else {
			$footer.removeClass(className);
		}
	}

})(jQuery, window);

/*	Header.js
 *	---------------------------------------- */

(function($, window){

	var $window = $(window);

	$('.menu-toggle').click(function(e){
		e.preventDefault();
		var $this = $(this),
			$mainNav = $('.main-navigation');

		if ( $mainNav.hasClass('open') ) {
			$this.removeClass('active');
			$mainNav
				.animate(
					{ opacity: 0 }, 
					{
						duration: 250, 
						done: function(){
							$mainNav.css({ right: '-100%' });
						} 
					}
				)
				.removeClass('open');
		} else {
			$this.addClass('active');
			$mainNav
				.animate(
					{ right: 0 }, 
					{
						duration: 0, 
						done: function(){
							$mainNav.animate({ opacity: 1 });
						} 
					}
				)
				.addClass('open');
		}
	});

	if ( $('body').hasClass('home') ) {

		var $homeNavContainer = $('.home-nav-container'),
			navWidth = $homeNavContainer.width(),
			$homeNav = $('.home-navigation'),
			scrollTop;

		$window.on('scroll', function(){
			scrollTop = $window.scrollTop();
			if ( scrollTop >= $homeNavContainer.offset().top ) {
				$homeNavContainer.addClass('fixed');
				$homeNav.css('width', navWidth + 'px');
			} else {
				$homeNavContainer.removeClass('fixed');
				$homeNav.css('width', 'auto');
			}
		})
		.on('resize', function(){
			navWidth = $homeNavContainer.width();
		});

	}

})(jQuery, window);

/*	Header.js
 *	---------------------------------------- */

(function($, window){

	var $window = $(window),
		height = $window.height();

	if ( $('body').hasClass('home') ) {
		setHeight();
		
		$window
			.on('resize', setHeight)
			.on('scroll', function(e){
				var area = {
						top: $window.scrollTop(),
						bottom: $window.scrollTop() + ($window.height()/2)
					},
					$active = null;

				$('.home-section').each(function(){
					var $section = $(this),
						top = $section.offset().top,
						bottom = top + $section.height(),
						id = $section.attr('id');
					if ( top <= area.bottom && bottom > area.top ) {
						$active = $('.section-nav a[href="#'+id+'"]');
					}
				});

				$('.section-nav a').not($active).removeClass('active');
				$active.addClass('active');
			});

	
		$('.section-nav a').click(function(e){
			e.preventDefault();
			var target = $(this).attr('href');
			$('html,body').animate({scrollTop: $(target).offset().top + 'px'});
		});
	}

	function setHeight() {
		height = $window.height();
		if ( window.outerWidth >= 768 ){
			$('.home-section .outer-container').css('height', (height - 52) + 'px');
		} else {
			$('.home-section .outer-container').css('height', 'auto');
			$('.intro-section .outer-container').css('height', (height - 42) + 'px');
		}
	}

})(jQuery, window);