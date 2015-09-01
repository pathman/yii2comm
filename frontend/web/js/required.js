    var ieversion = 0;
    if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
        ieversion=new Number(RegExp.$1); // capture x.x portion and store as a number
    }
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
        App.initBxSlider1();
		// make main menu sticky
		if (( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) && ((ieversion >= 10) || (ieversion == 0))) {
			$(".header").sticky({topSpacing: 0, stickyHeight: 70});
		} else {}	
    });
    if (( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) && ((ieversion >= 10) || (ieversion == 0))) {
        $(window).load(function(){
            $('.bwWrapper').BlackAndWhite({
                hoverEffect : true, // default true
                // set the path to BnWWorker.js for a superfast implementation
                webworkerPath : false,
                // for the images with a fluid width and height
                responsive:true,
                // to invert the hover effect
                invertHoverEffect: false,
                // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                intensity:1,
                speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                    fadeIn: 200, // 200ms for fadeIn animations
                    fadeOut: 800 // 800ms for fadeOut animations
                },
                onImageReady:function(img) {
                    // this callback gets executed anytime an image is converted
                }
            });
        });
    } else {}