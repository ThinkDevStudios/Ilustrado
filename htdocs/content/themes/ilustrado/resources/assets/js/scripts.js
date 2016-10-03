jQuery(document).ready(function() {
	var bWidth = jQuery(window).width();
		bHeight = jQuery(window).height();

		if ( bHeight >= 720 ) {
			bHeight = 720;
		}
		jQuery('header#header').width(bWidth);
		jQuery('header#header').height(bHeight);

		jQuery('.menu-grid aside').each(function() {
			var asideWidth = jQuery(this).width();
				nameWidth = jQuery(this).find('.menu-name').width();	
				menuPrice = jQuery(this).find('.menu-price').width();

				spacerWidth = asideWidth - (nameWidth + menuPrice + 100);
			jQuery(this).find('.menu-spacer').css('width', spacerWidth);
		})
	var menu = document.getElementById('menu');
		menuSlider = document.getElementById('nav-slide');
		menuCloser = jQuery('#nav-slide .close');
	// hasClass
	function hasClass(elem, className) {
		return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
	}
	// addClass
	function addClass(elem, className) {
	    if (!hasClass(elem, className)) {
	    	elem.className += ' ' + className;
	    }
	}
	// removeClass
	function removeClass(elem, className) {
		var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
		if (hasClass(elem, className)) {
	        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
	            newClass = newClass.replace(' ' + className + ' ', ' ');
	        }
	        elem.className = newClass.replace(/^\s+|\s+$/g, '');
	    }
	}
	// toggleClass
	function toggleClass(elem, className) {
		var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
	    if (hasClass(elem, className)) {
	        while (newClass.indexOf(" " + className + " ") >= 0 ) {
	            newClass = newClass.replace( " " + className + " " , " " );
	        }
	        elem.className = newClass.replace(/^\s+|\s+$/g, '');
	    } else {
	        elem.className += ' ' + className;
	    }
	}

	menu.onclick = function() {
	   toggleClass(this, 'off');
	   toggleClass(menuSlider, 'active');
	   return false;
	}
	jQuery('#nav-slide .close').click(function() {
		jQuery('#nav-slide').removeClass('active');
		jQuery('#top-nav #menu').removeClass('off');
	})
})
