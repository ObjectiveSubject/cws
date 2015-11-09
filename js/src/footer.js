
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