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
                // extra
                elementsToShow[i].classList.remove('slide-up-larger');
                elementsToShow[i].classList.remove('slide-down');
                elementsToShow[i].classList.remove('slide-left');
            }
        }
    }
    // comment for amea 
    if (scrollFromTop >= 150) {
        jQuery(".custom-header").addClass("scrolled");
        jQuery(".mob-header").addClass("scrolled");
    }
    else {
        jQuery(".custom-header").removeClass("scrolled");
        jQuery(".mob-header").removeClass("scrolled");
    }
    scroll(loop);
}

// Call the loop for the first time
loop();




// anchor link click
jQuery('a[href*=\\#]').on('click', function (event) {
    if (jQuery(this.hash).length) {
        smoothScrollingTo(this.hash);
        event.preventDefault();
    }
});

// anchor on url
if (window.location.hash) {
    smoothScrollingTo(window.location.hash);
    history.replaceState(null, null, ' '); //remove hash from window location after scrolling to it
}

function smoothScrollingTo(target) {

    var targetElement = jQuery(target); // find the target element

    if (!targetElement.length) return; // return if no data-target found

    jQuery('html,body').animate({
        scrollTop: (targetElement.offset().top - 150)
    }, 1500);

}



// Info Pages Mobile Menu (useful info)
jQuery(".mobile-info-tab").click(function () {
    jQuery(this).toggleClass('rotate');
    jQuery(".sidebar-menu").toggleClass('active');
});


// faqs animation
jQuery(".question").click(function () {
    var faqItem = jQuery(this).closest('.single-faq');
    var allFaqItems = jQuery('.single-faq');

    // Toggle 'active' class for the clicked item
    faqItem.find(".faq-content").toggleClass('active');
    faqItem.find(".answer").toggleClass('active');

    // Remove 'active' class from other items
    allFaqItems.not(faqItem).find('.faq-content.active').removeClass('active');
    allFaqItems.not(faqItem).find('.answer.active').removeClass('active');
});



