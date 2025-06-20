
var quoteSlider = new Swiper(".quotes-wrapper.swiper-container", {
    effect: "fade",
    fadeEffect: {
        crossFade: true
    },
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    // direction: "vertical",
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
});

//Home Slider
var heroSlider = new Swiper(".single-slider-wrapper.swiper-container", {
    effect: "fade",
    loop: true,
    // autoplay: {
    //     delay: 4000,
    //     disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next.intro",
        prevEl: ".swiper-button-prev.intro",
    },
    pagination: {
        el: '.swiper-pagination.intro-bot',
        type: 'bullets',
        clickable: true
    },
});


var swiperSingle = new Swiper('.single-main-gallery.swiper-container', {
    // Optional parameters
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    //  autoplay: {
    //   delay: 3000,
    //   disableOnInteraction: false,
    // },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next.single-gallery',
        prevEl: '.swiper-button-prev.single-gallery',
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        800: {
            slidesPerView: 3,
        },
    }
});





//Home Slider Fleet
let fleetSlider = new Swiper('.fleet-slider', {
    slidesPerView: 3,
    loop: true,
    // autoplay: {
    //     delay: 10000,
    //     disableOnInteraction: false,
    // },
    centeredSlides: false,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next.car-fleet-btn",
        prevEl: ".swiper-button-prev.car-fleet-btn",
    },
    breakpoints: {
        300: {
            slidesPerView: 1.1,
            spaceBetween: 15,
        },
        780: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        }
    },
});



var introHeroSwiper = new Swiper(".introHeroSwiper", {
    // slidesPerView: 1,
    grabCursor: true,
    effect: "fade",
    fadeEffect: {
        crossFade: true
    },
    navigation: {
        nextEl: ".swiper-button-next-hero",
        prevEl: ".swiper-button-prev-hero",
    },
});




var swiper = new Swiper(".heroSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    // freeMode: true,
    // effect: "fade",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next.v1",
        prevEl: ".swiper-button-prev.v1"
    },
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: true,
    // },
});



var fleetSwiper = new Swiper(".fleetSwiper", {
    loop: true,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next.fleet",
        prevEl: ".swiper-button-prev.fleet",
    },
    breakpoints: {
        240: {
            slidesPerView: 1,
        },
        500: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1366: {
            slidesPerView: 3,
        },
    },
});



var imgListSlider = new Swiper(".image-text2-slides-wrapper.swiper-container", {
    effect: "fade",
    loop: true,
    // autoplay: {
    //     delay: 4000,
    //     disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next.img2",
        prevEl: ".swiper-button-prev.img2",
    },
});


var galleryFSlider = new Swiper(".gallery-slides-wrapper.swiper-container", {
    slidesPerView: 3,
    effect: "fade",
    loop: true,
    // autoplay: {
    //     delay: 4000,
    //     disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next.gallery",
        prevEl: ".swiper-button-prev.gallery",
    },
});



var reviewsSlider = new Swiper(".reviews-section.swiper-container", {
    effect: "fade",
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    },
    speed: 10,
    lazy: {
        // tell swiper to load images before they appear
        loadPrevNext: false,
        // amount of images to load
        loadPrevNextAmount: 1
    },
    pagination: {
        el: '.swiper-pagination.reviews',
        type: 'bullets',
        clickable: true
    },
});



//Reviews Slider Homepage
var reviewsSwiper = new Swiper(".reviews-slider", {
    spaceBetween: 40,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-reviews",
        prevEl: ".swiper-button-prev-reviews",
    },
    breakpoints: {
        200: {
            slidesPerView: 1.2,
            spaceBetween: 15,
        },
        600: {
            slidesPerView: 2.5,
        },
        1300: {
            slidesPerView: 3.5,
        },
    },
});


var archiveSwiper = new Swiper('.archive-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 150,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        280: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        900: {
            slidesPerView: 1,
            spaceBetween: 150
        }
    }
});

var facilitiesSwiper = new Swiper('.facilities-slider', {
    slidesPerView: 3,
    spaceBetween: 35,
    freeMode: false,
    // effect: "fade",
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    // navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev"
    // },
    autoplay: {
    delay: 3500,
    disableOnInteraction: true,
    },
    breakpoints: {
    200: {
    slidesPerView: 1,
    },
    600: {
    slidesPerView: 1,
    },
    880: {
    slidesPerView: 2,
    },
    1280: {
    slidesPerView: 3,
    },
    },
});




var NewfacilitiesSwiper = new Swiper('.facilities-slider-v5', {
    slidesPerView: 1.2,
    freeMode: false,
    centeredSlides: false,
    // effect: "fade",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        // type: "progressbar",
    },

    breakpoints: {
        280: {
            slidesPerView: 1.3,
            spaceBetween: 10
        },
    }
});

// function updSwiperNumericCounter() {
//     jQuery(".swiper-counter").html('<span class="count">' + (this.realIndex + 1) + '</span>');
// };

//Home Stay Slider
// var names = [];
// jQuery(".stay-slider .swiper-slide").each(function(i) {
//   names.push(jQuery(this).data("name"));
// });

// var heroSlider = new Swiper(".stay-slider", {
//     effect: "fade",
//     loop: true,
//     autoHeight: true,
//     autoplay: {
//         delay: 8000,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//         renderBullet: function (index, className) {
//             return '<span class="text uppercase letter-spacing ' + className + '">' + (names[index]) + '<span class="diamond-spacer alt-color"></span></span>';
//         },
//     },
// });

//Area Guide Slider
// var names = [];
// jQuery(".area-guide-slider .swiper-slide").each(function(i) {
//   names.push(jQuery(this).data("name"));
// });

// var heroSlider = new Swiper(".area-guide-slider", {
//     effect: "fade",
//     loop: true,
//     autoHeight: true,
//     autoplay: {
//         delay: 8000,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//         renderBullet: function (index, className) {
//             return '<span class="text uppercase letter-spacing ' + className + '">' + (names[index]) + '<span class="diamond-spacer alt-color"></span></span>';
//         },
//     },
// });


//Single Stay Accommodation Gallery Slider
// let excursionSlider = new Swiper('.single-excursion-intro-wrapper', {
//     slidesPerView: 1,
//     loop: true,
//     centeredSlides: true,
//     spaceBetween: 20,
//     effect: 'fade',
//     navigation: {
//       nextEl: ".swiper-button-next.intro",
//       prevEl: ".swiper-button-prev.intro",
//     },
// });



//Slider with counter
// let excursionsIntroSlider = new Swiper('.intro-excursions-slider-wrap', {
//     slidesPerView: 1.5,
//     loop: true,
//     spaceBetween: 20,
//     navigation: {
//       nextEl: ".swiper-button-next.intro-slider",
//       prevEl: ".swiper-button-prev.intro-slider",
//     },
//     on: {
//         init: updSwiperNumericPagination,
//         slideChange: updSwiperNumericPagination,
//     },
//     breakpoints: {
//         // when window width is >= 640px
//         700: {
//             slidesPerView: 2.5,
//         }
//     }
// });

// function updSwiperNumericPagination() {
//     jQuery(".swiper-counter").html('<span class="count">0' + (this.realIndex + 1) + '</span>');
// };
