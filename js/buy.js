jQuery(document).ready(function(){

	//jQuery(".buy-button").hide();	

	jQuery("img.item-preview").click(function() {

		//jQuery(".buy-button").hide();
		type = jQuery(this).closest("div").attr("class").split(' ')[1];
		//jQuery("." + type + "Button").show();

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

		jQuery(".BuyField").val(clas);
		
	});

});


