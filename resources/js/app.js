require("./bootstrap");

window.Vue = require("vue");

Vue.component("contact-form", require("./components/ContactForm.vue").default);

const app = new Vue({
    el: "#app",
});

$(function() {
    "use strict";

    // On window's load
    /**$(window).on("load", function() {
        setTimeout(function() {
            $(".page_loader").fadeOut("fast");
            setDefaultPosition();
        }, 1000);
    });**/

    var headerHeight = $(".main-header").height();

    if ($(".sticky-header-scroll").length > 0) {
        var stickyOffset = $(".sticky-header-scroll").offset().top;
        $(window).scroll(function() {
            var sticky = $(".sticky-header-scroll"),
                scroll = $(window).scrollTop() + headerHeight * 2;

            if (scroll >= stickyOffset) sticky.addClass("fixed");
            else sticky.removeClass("fixed");
        });
    }

    // Page scroll
    $("#navbar a.single").on("click", function(event) {
        $("#navbar").removeClass("in");
        $(".navbar-collapse").collapse("hide");
        var topDistance = headerHeight;
        if ($(document).find(".abs-header").length > 0) {
            if ($(document).find(".abs-header.fixed").length < 1) {
                topDistance = headerHeight * 2;
            }
        }

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top - topDistance,
                },
                800,
                function() {
                    //window.location.hash = hash;
                }
            );
        }
    });

    function setDefaultPosition() {
        var url = window.location.href;
        url = url.split("#");
        if (url.length == 2) {
            var selector = url[1];
            if ($("#" + selector).length > 0) {
                $("html, body").animate(
                    {
                        scrollTop: $("#" + selector).offset().top - headerHeight,
                    },
                    "slow"
                );
            }
        }
    }

    // Header shrink while page scroll
    adjustHeader();
    doSticky();
    $(window).on("scroll", function() {
        adjustHeader();
        doSticky();
    });

    function adjustHeader() {
        if ($(document).scrollTop() >= 100) {
            if ($(".header-shrink").length < 1) {
                $(".sticky-header").addClass("header-shrink");
            }
            if ($(".do-sticky").length < 1) {
                $(".logo img").attr("src", "img/logo_nav_gray.png");
            }
        } else {
            $(".sticky-header").removeClass("header-shrink");
            if ($(".do-sticky").length < 1) {
                $(".logo img").attr("src", "img/logo_nav_white.png");
            }
        }
    }

    function doSticky() {
        if ($(document).scrollTop() > 40) {
            $(".do-sticky").addClass("sticky-header");
        } else {
            $(".do-sticky").removeClass("sticky-header");
        }
    }

    // Page scroller initialization.
    /**$.scrollUp({
        scrollName: "page_scroller",
        scrollDistance: 300,
        scrollFrom: "top",
        scrollSpeed: 500,
        easingType: "linear",
        animation: "fade",
        animationSpeed: 200,
        scrollTrigger: false,
        scrollTarget: false,
        scrollText: '<i class="fa fa-chevron-up"></i>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647,
    });**/
});
