import $ from "jquery";
import "bootstrap";
window.$ = window.jQuery = $;
window.toastr = require("toastr");
require("owl.carousel");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (window.scrollY > document.documentElement.clientHeight) {
        $(".btn__top").show();
    } else {
        $(".btn__top").hide();
    }
}

$(".btn__top").on("click", () => {
    window.scrollTo({
        left: 0,
        top: 0,
        behavior: "smooth",
    });
});

$(".owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
        },
        400: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1200: {
            items: 3,
        },
        1600: {
            items: 4,
        },
    },
});

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    width: "25rem",
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});
