// remap jQuery to $


(function ($) {

  Drupal.behaviors.yourTheme = {
    attach: function (context, settings) {

      $(document).ready(function() {

        // Define the target element(s)
        var slides = $("div#block-views-actu-a-la-une-block.block div.content div.view div.view-content div.item-list ul li.views-row div.node div.content div.field div.field-items div.field-item img", context);
        // Resize on page load.
        slides.each( resize_slide );

        // Trigger resize of element on window resize.
        $(window).resize(function() {
           slides.each( resize_slide );
         });

        // Define resize function.
        function resize_slide() {
          var doc_width = $(window).width(); // can also use $(document).width(), which makes resizing faster
          var doc_height = $(window).height(); // can also use $(document).height(), which makes resizing faster

          var image_width = $(this).width();
          var image_height = $(this).height();

          var image_ratio = image_width/image_height;

          var new_width = doc_width;
          var new_height = Math.round(new_width/image_ratio);

          $(this).width(new_width);
          $(this).height(new_height);
          $(this).removeAttr('width').removeAttr('height');
          if (new_height<doc_height) {
            new_height = doc_height;
            new_width = Math.round(new_height*image_ratio);

            $(this).width(new_width);
            $(this).height(new_height);
            var width_offset = Math.round((new_width-doc_width)/2);

            $(this).css("left","-"+width_offset+"px");
          }
        }

      // End $(document).ready
      });
    }
  };

}(jQuery));
(function($) {
  var getHeightProperty = function() {
    var browser_id = 0;
    var property = [
      // To avoid content overflow in synchronised boxes on font scaling, we
      // use 'min-height' property for modern browsers ...
      ['min-height','0px'],
      // and 'height' property for Internet Explorer.
      ['height','1%']
    ];

    var bMatch = /(msie) ([\w.]+)/.exec(navigator.userAgent.toLowerCase()) || [],
      browser = bMatch[1] || "",
      browserVersion = bMatch[2] || "0";

    // check for IE6 ...
    if(browser === 'msie' && browserVersion < 7){
      browser_id = 1;
    }

    return {
      'name': property[browser_id][0],
      'autoheightVal': property[browser_id][1]
    };
  };

  $.getSyncedHeight = function(selector) {
    var max = 0;
    var heightProperty = getHeightProperty();
    // get maximum element height ...
    $(selector).each(function() {
      // fallback to auto height before height check ...
      $(this).css(heightProperty.name, heightProperty.autoheightVal);
      var val = parseInt($(this).css('height'),10);
      if(val > max){
        max = val;
      }
    });
    return max;
  };

  $.fn.syncHeight = function(config) {
    var defaults = {
      updateOnResize: false,  // re-sync element heights after a browser resize event (useful in flexible layouts)
      height: false
    };

    var options = $.extend(defaults, config);
    var e = this;
    var max = 0;
    var heightPropertyName = getHeightProperty().name;

    if(typeof(options.height) === "number") {
      max = options.height;
    } else {
      max = $.getSyncedHeight(this);
    }

    // set synchronized element height ...
    $(this).each(function() {
      $(this).css(heightPropertyName, max+'px');
    });

    // optional sync refresh on resize event ...
    if (options.updateOnResize === true) {
      $(window).resize(function(){
        $(e).syncHeight();
      });
    }
    return this;
  };

  $.fn.unSyncHeight = function() {
    var heightPropertyName = getHeightProperty().name;
    $(this).each(function() {
      $(this).css(heightPropertyName, '');
    });
  };
})(jQuery);

  Cufon.replace('.readmore-home',{hover: true});
  Cufon.replace('.pe');
  Cufon.replace('h2');
  Cufon.replace('liane-entetepage',{color:'#303030'});
  Cufon.replace('div#block-views-message-d-accueil-block.block div.content div.view div.view-content ul li.views-row .node h2',{color:'#fff'});
  Cufon.replace('h3');
  Cufon.replace('ul.nav li a',{hover: true});
  Cufon.replace('ul.nav li ul li a',{hover: true});
  (function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){
 $('div#block-views-crasc-sud-block.block div.content div.view div.view-content div.item-list ul li.ym-equalize').syncHeight({ updateOnResize: true });
 $(' div#block-views-crasc-sud-block.block div.content div.view div.view-content div.item-list ul li.ym-equalize div#node-4.node h2').syncHeight({ updateOnResize: true });
	var $j = jQuery.noConflict();
 	$j('#bbdosc').capty({
		   height:   46
		   });
      $j().UItoTop({ easingType: 'easeOutQuart' });

  var aboveHeight = $j('#contenu-header').outerHeight();

$j('.news').before('<div id="fiv"></div>').cycle({
  fx: 'scrollHorz',
    speed: 1000,
    timeout: 5000,
    prev: '.prev',
    next: '.next',
    pager:'#fiv'
});
$j('ul#annonces-defilantes.list-1').after('<div id="dif"></div>').cycle({
 fx: 'scrollHorz',
    speed: 1000,
    timeout: 5000,
    pager:'#dif'
});
var ww = document.body.clientWidth;

jQuery(document).ready(function() {
	jQuery(".nav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})

	jQuery(".toggleMenu").click(function(e) {
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".nav").toggle();
	});
	adjustMenu();
})
jQuery(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		jQuery(".toggleMenu").css("display", "inline-block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".nav").hide();
		} else {
			jQuery(".nav").show();
		}
		jQuery(".nav li").unbind('mouseenter mouseleave');
		jQuery(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			jQuery(this).parent("li").toggleClass("hover");
		});
	}
	else if (ww >= 768) {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".nav").show();
		jQuery(".nav li").removeClass("hover");
		jQuery(".nav li a").unbind('click');
		jQuery(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	jQuery(this).toggleClass('hover');
		});
	}
}


});

  /*webfont droid sans*/
  WebFontConfig = {
    google: { families: [ 'Droid+Sans::latin' ] }
  };
  	(function() {
   	 var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);

	})();

/* optional triggers

$(window).load(function() {

});

$(window).resize(function() {

});

*/
