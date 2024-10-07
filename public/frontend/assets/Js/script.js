const slider = $(".slider");

// Animation
$(".slider").on("init", function (e, slick) {
    var $firstAnimatingElements = $("div.slick-slide:first-child").find(
        "[data-animation]"
    );
    doAnimations($firstAnimatingElements);
});
$(".slider").on("beforeChange", function (e, slick, currentSlide, nextSlide) {
    var $animatingElements = $(
        'div.slick-slide[data-slick-index="' + nextSlide + '"]'
    ).find("[data-animation]");
    doAnimations($animatingElements);
});

// Slider Main Settings
slider.slick({
    dots: true,
    arrows: false,
    vertical: true,
    autoplay: true, // Enable auto slide
    autoplaySpeed: 2000, // Set auto slide speed in milliseconds (optional)
});

// Vertical Mouse Scroll
// slider.on("wheel", function (e) {
//   e.preventDefault();

//   if (e.originalEvent.deltaY < 0) {
//     $(this).slick("slickNext");
//   } else {
//     $(this).slick("slickPrev");
//   }
// });

// Animation
function doAnimations(elements) {
    var animationEndEvents =
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data("delay");
        var $animationType = "animated " + $this.data("animation");
        $this.css({
            "animation-delay": $animationDelay,
            "-webkit-animation-delay": $animationDelay,
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
        });
    });
}

$(".service-slick-carousel").slick({
    infinite: true,
    slidesToShow: 4, // Shows three slides at a time
    slidesToScroll: 1, // When you click an arrow, it scrolls one slide at a time
    arrows: true, // Adds arrows to sides of slider
    dots: false, // Adds the dots on the bottom
    responsive: [
        {
            breakpoint: 1311, // Adjust the breakpoint as needed
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 768, // Adjust the breakpoint as needed
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 480, // Adjust the breakpoint as needed
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});

$(document).ready(function () {
    $(".slider-testimornial").slick({
        autoplay: true, // Enable auto slide
        autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
        dots: false, // Display dots navigation
        arrows: true, // Display arrows navigation
        infinite: true, // Enable infinite loop
        speed: 500, // Animation speed in milliseconds
        slidesToShow: 4, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll at a time
        responsive: [
            {
                breakpoint: 768, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
$(document).ready(function () {
    $(".slider-pertners").slick({
        autoplay: true, // Enable auto slide
        autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
        dots: false, // Display dots navigation
        arrows: true, // Display arrows navigation
        infinite: true, // Enable infinite loop
        speed: 500, // Animation speed in milliseconds
        slidesToShow: 8, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll at a time
        responsive: [
            {
                breakpoint: 768, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
$(document).ready(function () {
    $(".slider-project").slick({
        autoplay: true, // Enable auto slide
        autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
        dots: false, // Display dots navigation
        arrows: true, // Display arrows navigation
        infinite: true, // Enable infinite loop
        speed: 500, // Animation speed in milliseconds
        slidesToShow: 3, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll at a time
    });
});
$(document).ready(function () {
    $(".slider-related-courses").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4, // Default for larger screens
        slidesToScroll: 1,
        gap: 15,
        responsive: [
            {
                breakpoint: 768, // Target screen widths below 768px (tablet and smaller)
                settings: {
                    slidesToShow: 2, // Show 2 slides on tablet screens
                },
            },
            {
                breakpoint: 480, // Target screen widths below 480px (mobile)
                settings: {
                    slidesToShow: 1, // Show 1 slide on mobile screens
                },
            },
        ],
    });
});

$(window).load(function () {
    $(".loader").fadeOut(100);
});
