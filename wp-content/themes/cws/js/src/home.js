
/*	Header.js
 *	---------------------------------------- */

(function($, window){

	var $window = $(window),
		height = $window.height();

	if ( $('body').hasClass('home') ) {
		
		$window
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
				if ( $active ) {
					$active.addClass('active');
				}
			});

	
		$('.section-nav a').click(function(e){
			e.preventDefault();
			var target = $(this).attr('href');
			$('html,body').animate({scrollTop: $(target).offset().top + 'px'});
		});
	}

})(jQuery, window);