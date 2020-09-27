
jQuery(document).ready(function($) {
		
		$(window).scroll(function() {
		   var currentScroll = $(this).scrollTop();
		   if (currentScroll > 100 ) {
			    $('#top-header').addClass('et-fixed-header');
				$('#main-header').addClass('et-fixed-header');
		   } else {
			    $('#top-header').removeClass('et-fixed-header');
				$('#main-header').removeClass('et-fixed-header');
		   }
		})
});