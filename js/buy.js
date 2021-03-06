jQuery(document).ready(function(){

	jQuery("img.item-preview").click(function() {

		type = jQuery(this).closest("div").attr("class").split(' ')[1];

		currentID = jQuery(this).closest("div").attr("class").split(' ')[0];

		jQuery("#single-item-column").fadeOut("slow");

		jQuery("#single-item-column .show-me").fadeOut("slow", function(){
			jQuery(this).removeClass("show-me").addClass("hide-me");
			jQuery("#single-item-column ." + currentID).fadeIn("slow",
				function() {
					jQuery(this).removeClass("hide-me").addClass("show-me");
				});

			jQuery("#single-item-column").fadeIn("slow");		
		});

		return false;
	});

	jQuery(".color-box").click(function(){

		image = jQuery(this).css("background-image");
		clas = jQuery(this).attr("class").split(' ')[1];
		jQuery(this).closest(".item-box").css("background-image", image);
		
		convertedColour = colourConverter(clas);

		jQuery(".show-me select").val(convertedColour);

	});



});


function colourConverter(colour){
	
	switch(colour) {
	  case 'blue':
		return 'Blue'
     break;
	  case 'green':
		return 'Dark Green'
     break;
	  case 'lightGreen':
		return 'Light Green'
     break;
	  case 'magenta':
		return 'Magenta'
     break;
	  case 'orange':
		return 'Orange'
     break;
	  case 'pink':
		return 'Pink'
     break;
	  case 'purple':
		return 'Purple'
     break;
	  case 'yellow':
		return 'Yellow'
     break;
	  default:
		return false;
	  break;
	}
	
}
