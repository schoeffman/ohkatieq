var mobile = false;

if(/android.+mobile|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
  
    mobile = true;
}

jQuery(document).ready(function(){

    if(mobile)
    {
        jQuery("#container .item img").each(function(){          
            jQuery(this).attr('onclick','');
        })
    }


// cache container
var jQuerycontainer = jQuery('#container');
// initialize isotope
jQuerycontainer.isotope({
  // options...
});

// filter items when filter link is clicked
jQuery('#filters a').click(function(){
  var selector = jQuery(this).attr('data-filter');
  jQuerycontainer.isotope({filter: selector});
  return false;
});


jQuery(".isotope-item").hover(function(){
                            jQuery(this).children(".Black-White").stop();
                            //jQuery(this).children(".Text-Box").fadeIn(100);
                            jQuery(this).children(".Black-White").animate({opacity: 0.0}, 200); // .css("opacity", "0");
                        }, 
                        function(){
                            jQuery(this).children(".Black-White").stop();
                            //jQuery(this).children(".Text-Box").fadeOut(100);
                            jQuery(this).children(".Black-White").animate({opacity: 1.0}, 200); //.css("opacity", "1");
                        });
});

