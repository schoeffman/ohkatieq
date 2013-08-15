jQuery(document).ready(function(){

	jQuery(".menu-header-menu-container").hover(function(){

		jQuery("ul.sub-menu a").fadeIn(800);
	},
	function(){

		jQuery("ul.sub-menu a").fadeOut(800);
	});
 

});



