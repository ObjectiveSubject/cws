
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