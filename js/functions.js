// remap jQuery to $
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

	var $j = jQuery.noConflict();
 	$j('#bbdosc').capty({
		   height:   46
		   });
      $j().UItoTop({ easingType: 'easeOutQuart' });

  var aboveHeight = $j('#contenu-header').outerHeight();

$j('.slider').before('<div id="fiv"></div>').cycle({
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
