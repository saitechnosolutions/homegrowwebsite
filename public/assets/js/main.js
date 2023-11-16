const nav = document.querySelector("nav");
const navHeight = 70;
// the point the scroll starts from (in px)
let lastScrollY = 0;
// how far to scroll (in px) before triggering
const delta = 10;

// function to run on scrolling
function scrolled() {
    let sy = window.scrollY;
    // only trigger if scrolled more than delta
    if (Math.abs(lastScrollY - sy) > delta) {
        // scroll down -> hide nav bar
        if (sy > lastScrollY && sy > navHeight) {
            nav.classList.add("nav-up");
            $(".darks-logo").css({
                "top": "3px",
                "position": "absolute"
            })

        }
        // scroll up -> show nav bar
        else if (sy < lastScrollY) {
            $(".darks-logo").css({
                "top": "3px",
                "position": "fixed"
            })
            nav.classList.remove("nav-up");
        }
        // update current scroll point
        lastScrollY = sy
    }
}

// Add event listener & debounce so not constantly checking for scroll
let didScroll = false;
window.addEventListener("scroll", function (e) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        scrolled();
        didScroll = false;
    }
}, 250)

$(document).ready(function () {

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var windowWidth = $(window).width();
        if (scroll > 100) {
            $(".navbar-section").addClass("intro");

        } else {
            $(".navbar-section").removeClass("intro");
        }

    })
})
$(".navbar-toggler").click(function () {
    // Toggle the class on the button click
    $(".navbar-section").addClass("introcbhd");
});


