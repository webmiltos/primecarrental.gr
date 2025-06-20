jQuery(document).ready(function () {
	jQuery('.scroll-div').click(function () {
		var scrollId = jQuery(this).data('scrollid');
		if (!scrollId)
			return false;
		var scrollpos = jQuery('#' + scrollId).offset().top;
		var headerHeight = jQuery('.custom-header').outerHeight();
		scrollpos = scrollpos - (headerHeight + 0);
		jQuery('html,body').animate({
			scrollTop: (scrollpos)
		}, 1000, function () { });
	})
})



// mobile header toggle
jQuery(".burger-menu").click(function () {
	jQuery(".burger-menu").toggleClass("show");
	jQuery(".menu-mob").toggleClass("show");
});
jQuery('.menu-mob').on('click', function (e) {
	if (e.target.className !== "menu-mob-wrap" && !jQuery(e.target).parents('.menu-mob-wrap').length) {
		jQuery(".burger-menu").removeClass("show");
		jQuery(".menu-mob").removeClass("show");
	}
});


// Detect request animation frame
var scroll = window.requestAnimationFrame ||
	// IE Fallback
	function (callback) { window.setTimeout(callback, 1000 / 60) };

var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
	var scrollFromTop = window.pageYOffset || document.documentElement.scrollTop;
	var i;

	if (elementsToShow.length) {
		for (i = 0; i < elementsToShow.length; i++) {
			if (isElementPartiallyInViewport(elementsToShow[i])) {
				elementsToShow[i].classList.remove('slide-right');
				elementsToShow[i].classList.remove('slide-up');
				elementsToShow[i].classList.remove('slide-down');
				elementsToShow[i].classList.remove('slide-left');
			}
		}
	}
	// comment for amea 
	if (scrollFromTop >= 150) {
		jQuery(".custom-header, .mob-header").addClass("scrolled");
	}
	else {
		jQuery(".custom-header, .mob-header").removeClass("scrolled");
	}

	scroll(loop);
}

// Call the loop for the first time
loop();



// HELPER FUNCTIONS TO CHECK ELEMENT VISIBILITY

function isElementPartiallyInViewport(el) {
	//special bonus for those using jQuery
	if (typeof jQuery !== 'undefined' && el instanceof jQuery) el = el[0];

	var rect = el.getBoundingClientRect();
	// DOMRect { x: 8, y: 8, width: 100, height: 100, top: 8, right: 108, bottom: 108, left: 8 }
	var windowHeight = (window.innerHeight || document.documentElement.clientHeight);
	var windowWidth = (window.innerWidth || document.documentElement.clientWidth);

	// http://stackoverflow.com/questions/325933/determine-whether-two-date-ranges-overlap
	var vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
	var horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

	return (vertInView && horInView);
}


// Pop-up New 
jQuery(document).ready(function () {

	setTimeout(function () {
		jQuery('.pop-up-wrapper').addClass("show-popup");
	}, 2000);

	jQuery(".close-sale-popup").click(function () {
		jQuery(".pop-up-wrapper").removeClass("show-popup");
		// Cookies.set("salePopup", 1, { expires: 3, path: '/' });
		jQuery(".intro-out-wrap-content").addClass("less-top");
	});

});


// Pop-up V2 
jQuery(document).ready(function () {

	setTimeout(function () {
		jQuery('.full-screen-popup').addClass("show-popup");
	}, 2000);

	jQuery(".close-sale-popup").click(function () {
		jQuery(".full-screen-popup").removeClass("show-popup");
		// Cookies.set("salePopup", 1, { expires: 3, path: '/' });
		jQuery(".intro-out-wrap-content").addClass("less-top");
	});
});


// on click copy Link

function copyTextToClipboard(text) {
	var textArea = document.createElement("textarea");
	textArea.style.position = 'fixed';
	textArea.style.top = 0;
	textArea.style.left = 0;

	textArea.style.width = '2em';
	textArea.style.height = '2em';

	textArea.style.padding = 0;

	textArea.style.border = 'none';
	textArea.style.outline = 'none';
	textArea.style.boxShadow = 'none';

	textArea.style.background = 'transparent';


	textArea.value = text;

	document.body.appendChild(textArea);

	textArea.select();

	try {
		var successful = document.execCommand('copy');
		var msg = successful ? 'successful' : 'unsuccessful';
		console.log('Copying text command was ' + msg);
	} catch (err) {
		console.log('Oops, unable to copy');
	}

	document.body.removeChild(textArea);
}

function copyLink() {
	copyTextToClipboard(location.href);
	jQuery('#copied-text').fadeIn().delay(2000).fadeOut();
}



// Add Active Class jQuery menu-item-has-children (mobile menu)
jQuery('.mob-header .menu-item-has-children').on('click', function (event) {
	if (!event.target.closest('.sub-menu-mob')) {
		jQuery('.mob-header .menu-item-has-children').not(this).removeClass('active'); // Remove active class from other items
		jQuery(this).toggleClass('active'); // Toggle active class for the clicked item
		jQuery(this).find('.sub-menu-mob').toggleClass('active'); // Toggle active class for the sub-menu of the clicked item
	}
}).children('a').click(function (e) {
	e.stopPropagation();
});






// on click of submit button at form, smooth scroll to notice that cf7 shows
jQuery(".form-submit-btn").click(function () { // class of submit button
	setTimeout(
		function () {
			jQuery('html,body').animate({
				scrollTop: jQuery(".wpcf7-response-output").offset().top - 380
			}, //class to scroll
				'slow');
		}, 3000); // we add time out to make the scroll after some seconds of button click
});
//if you send success message it scrolls you to top automatically so we add scroll to response later
document.addEventListener('wpcf7mailsent', function (event) {
	setTimeout(
		function () {
			jQuery('html,body').animate({
				scrollTop: jQuery(".wpcf7-response-output").offset().top - 380
			}, //class to scroll
				'slow');
		}, 2000);
}, false);



jQuery(document).ready(function () {
	jQuery(".expand-content-text").each(function () {

		var textWrapHeight = jQuery(this).height();
		var maxTextHeight = 300;

		if (textWrapHeight > maxTextHeight) {
			// console.log(textWrapHeight);
			var readContent = document.getElementById('readML');
			jQuery(this).addClass('expand');
			readContent = jQuery(this).find("#readML").html("Διαβάστε περισσότερα");

			jQuery(this).find("#readML").click(function () {
				// console.log("click");
				jQuery(this).parent('.expand-content-text').toggleClass("expand");
				if (jQuery(this).parent('.expand-content-text').hasClass("expand")) {
					jQuery(this).html("Διαβάστε περισσότερα");
				} else {
					jQuery(this).html("Διαβάστε λιγότερα");
				}
			});
		}
	});
});







// Burger Toggle
jQuery('.site-header__right_burger').on('click', function (event) {
	if (!event.target.closest('.burger-area')) {
		jQuery(".burger-area").toggleClass("hidden");
		jQuery(".site-header__right_burger").toggleClass("active");
		jQuery(".site-header").toggleClass("menu-open");
	}
});


// Sub-menu
jQuery('.header-menu-wrap .main-menu .menu-item-has-children').on('mouseover', function (event) {
	jQuery(this).addClass("active");
});
document.addEventListener('mouseover', function (event) {
	if (!event.target.closest('.main-menu, .sub-menu')) {
		jQuery(".header-menu-wrap .menu-item-has-children").removeClass("active");
	}
}, false);



var acc = document.getElementsByClassName("question-faq");
var i;

// single-faq active
for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function () {
		jQuery('.single-faq').removeClass("active");
		jQuery('.question-faq').removeClass("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
			panel.style.maxHeight = null;
		} else {
			jQuery('.panel').css({ "maxHeight": "" });
			panel.style.maxHeight = panel.scrollHeight + "px";
			this.classList.add("active");
			this.parentElement.classList.add("active");
		}
	});
}


// DATEPICKERS
var checkInDatepicker = jQuery("#your-date").flatpickr({
	dateFormat: "d M Y",
	"locale": {
		"firstDayOfWeek": 1 // start week on Monday
	},
	minDate: "today",
	disableMobile: true,
});
var checkOutDatepicker = jQuery("#your-time").flatpickr({
	enableTime: true,
	noCalendar: true,
	dateFormat: "H:i",
	time_24hr: true
});


// FORMS FLOATING LABELS
jQuery(document).ready(function ($) { //no conflict

	jQuery('.floating-labels-form').find('input, textarea, select').each(function () {
		if ($(this).val()) { //In case there is a preloaded value
			$(this).parents('.single-field').find("label").addClass("floated-label");
		} else {
			$(this).parents('.single-field').find("label").removeClass("floated-label");
		}
	});

	jQuery('.floating-labels-form').find('input, textarea, select').on('focus', function () { //On focus move the label
		$(this).parents('.single-field').find("label").addClass("floated-label");
	});

	jQuery('.floating-labels-form').find('input, textarea, select').on('blur', function () { //On blur check if there is any value, else remove the floated-label class.
		if (!$(this).val() && !$(this).hasClass('active')) {
			$(this).parents('.single-field').find("label").removeClass("floated-label");
		}
		if ($('.wpcf7-intl-tel').attr('placeholder') != '') { //In case there is a preloaded value
			$(this).parents('.single-field').find("label").addClass("floated-label");
		}
	});


	// close callback modal on submit
	var cf7Form = jQuery('.floating-labels-form .wpcf7-form');

	cf7Form.on('wpcf7submit', function (event) {
		if (event.detail.status == 'mail_sent') {
			console.log('form submitted')
			setTimeout(function () {
				jQuery('.single-field').find("label").removeClass('floated-label');
			}, 200);
		}
	});
});






jQuery(document).ready(function () {

	var $itemMainImage = jQuery('.single-image-dropdown').attr("main-image");
	jQuery('.single-image-dropdown').attr("src", $itemMainImage);
	jQuery(".menu-item-dropdown-megamenu").hover(
		function () {
			var $itemImage = jQuery(this).attr("image-link");
			if ($itemImage) {
				jQuery('.single-image-dropdown').attr("src", $itemImage);
			} else {
				var $itemMainImage = jQuery('.single-image-dropdown').attr("main-image");
				jQuery('.single-image-dropdown').attr("src", $itemMainImage);
			}

		}, function () {
			var $itemMainImage = jQuery('.single-image-dropdown').attr("main-image");
			jQuery('.single-image-dropdown').attr("src", $itemMainImage);
		}
	);


	jQuery(".header-menu-wrap .menu-item-has-children").hover(
		function () {
			jQuery(this).addClass('show');
			jQuery(this).addClass('rotate');
			jQuery('.custom-header.ver3.transparent').addClass('secondary-color');
			jQuery(this).find('.full-wrapper-submenu').addClass('show');
		}, function () {
			jQuery(this).removeClass('rotate');
			jQuery('.custom-header.ver3.transparent').removeClass('secondary-color');
			jQuery(this).find('.full-wrapper-submenu').removeClass('show');
		}
	);
});

//------------------------------
//NEW SUBMENU uncommnet if needed and comment old 

// dropdown-image
// jQuery('.menu-item-dropdown-megamenu').on('mouseover', function(event) {

// 	var itemID = jQuery(this).parents('li').attr('data-id');
// 	jQuery('.single-image-dropdown').removeClass('show-image');
// 	jQuery('.single-image-dropdown[data-id="'+itemID+'"]').addClass('show-image');
// });

// document.addEventListener('mouseover', function(event) {
// 	if (!event.target.closest('.menu-item-dropdown-megamenu') && jQuery('.single-image-dropdown.main-image').length > 0) {
// 		jQuery('.single-image-dropdown').removeClass('show-image');
// 	}
// }, false );
//------------------------------



jQuery('.scroll-down').click(function () {
	var nextSection = jQuery(this).parent().parent().parent().next();
	var parentHeight = jQuery('.intro-wrapper').height();
	var headerHeight = jQuery('.custom-header').height();

	jQuery('html, body').animate({
		scrollTop: nextSection.offset().top - headerHeight
	}, 1000);
});




jQuery(document).ready(function () {


	function isElementInViewport(el) {

		// Special bonus for those using jQuery
		if (typeof jQuery === "function" && el instanceof jQuery) {
			el = el[0];
		}

		var rect = el.getBoundingClientRect();

		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
			rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
		);
	}


	jQuery('body').on('wpcf7submit', '.wpcf7-form', function (event) {
		jQuery('.wpcf7-response-output').removeClass('success-message');

		var headerHeight = jQuery('.site-header').height() ? jQuery('.site-header').height() : 180;

		if (!isElementInViewport(jQuery('.wpcf7-response-output'))) {
			jQuery('html, body').animate({
				scrollTop: jQuery('.wpcf7-response-output').offset().top - headerHeight
			}, 'slow');
		}

		if (event.detail.status == 'mail_sent') {
			jQuery('.wpcf7-response-output').addClass('success-message');
		}

	});

});



jQuery('.fancybox.gallery-all').click(function (e) {
	e.preventDefault();
	var galleryImages = jQuery('.single-gallery-image');

	// galleryImages.each(function(index) {
	//     var imageAlt = jQuery(this).find('.no-font').text();
	//     jQuery(this).fancybox({
	//         caption: imageAlt,
	//         index: index
	//     });
	// });

	galleryImages.eq(0).trigger('click');
});

// DATEPICKERS  extra + time
var checkInDatepicker = jQuery("#your-check-in").flatpickr({
	dateFormat: "d-m-Y",
	"locale": {
		"firstDayOfWeek": 1 // start week on Monday
	},
	minDate: "today",
	disableMobile: true,
	onChange: function (dateStr, dateObj) {
		// create date object from the date string
		var date = new Date(dateStr);

		// add how many days we want on the date
		checkOutDatepicker.set("minDate", date.fp_incr(1));
	}
});
var checkOutDatepicker = jQuery("#your-dropoff-date").flatpickr({
	dateFormat: "d-m-Y",
	"locale": {
		"firstDayOfWeek": 1 // start week on Monday
	},
	disableMobile: true,
	minDate: "today",
});


var checkInTimepicker = jQuery("#your-pickup-time").flatpickr({
	enableTime: true,
	noCalendar: true,
	dateFormat: "H:i",
	time_24hr: true,

});

var checkOutTimepicker = jQuery("#your-dropoff-time").flatpickr({
	enableTime: true,
	noCalendar: true,
	dateFormat: "H:i",
	time_24hr: true,
});


// gallery page 
// GALLERY TABS JS
jQuery('.gallery-tab-link').on('click', function () {
	jQuery('.gallery-tab-link').removeClass('active');
	jQuery(this).addClass('active');

	jQuery('.gallery-wrap-page').removeClass('active'); // hide all tabs
	var targetTab = jQuery('.gallery-wrap-page[data-id="' + jQuery(this).data('id') + '"]'); // find the target tab of that button
	targetTab.addClass('active');  //show target tab
});

// fancybox issue with swiper buttons solved
jQuery('[data-fancybox="gallery"]').fancybox({
	backFocus: false,
	padding: 50,
});



jQuery(document).ready(function () {
	jQuery('.tab-link-mobile').on('click', function () {
		jQuery('.flex-wrap').toggleClass('show');
	});
});




jQuery('.intro-wrapper .scroll-next').click(function () {
	var nextSection = jQuery(this).parents('.intro-wrapper').siblings('section');

	var parentHeight = jQuery('.intro-wrapper').height();
	var headerHeight = jQuery('.custom-header').height();

	jQuery('html, body').animate({
		scrollTop: nextSection.offset().top - headerHeight
	}, 1000);
});





// add class on footer menu (mobile)
jQuery(".footer-menu-wrap").click(function () {
	jQuery(this).toggleClass('show');
});



jQuery(".select-before").click(function () {
	jQuery(this).toggleClass('rotate');
});









