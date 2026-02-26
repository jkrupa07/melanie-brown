export class Header {
    init() {
        this.HeaderFixed();
        this.MenuToggle();
    }
    HeaderFixed() {
        // header fixed js
        var prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;
        $(window).scroll(function () {
            var sticky = $(".header"),
                scroll = $(window).scrollTop();
            if (scroll >= 50) {
                sticky.addClass("header-fixed");
                sticky.removeClass("header-fixed-os");
            }
            else {
                sticky.removeClass("header-fixed");
                sticky.addClass("header-fixed-os");
            }
            var currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
            if (prevScrollPos > currentScrollPos || currentScrollPos === 0) {
                $(".header").removeClass("hidden");
            } else {
                $(".header").addClass("hidden");
            }
            prevScrollPos = currentScrollPos;
        });
    }

    MenuToggle() {
        $(".menu-toggle").click(function (e) {
            e.preventDefault();

            if (!$(".menu-toggle").hasClass("activate")) {
                // Open menu
                $(".menu-toggle").addClass("activate");
                $(".navigation").removeClass("d-none");
                $(".header").addClass("res-header-active");
                $("html").addClass("overflow-hidden");
            } else {
                // Close menu
                $(".menu-toggle").removeClass("activate");
                $(".navigation").addClass("d-none");
                $(".header").removeClass("res-header-active");
                $("html").removeClass("overflow-hidden");
            }
            $(".mega-link").removeClass("res-menu-active");
        });
    }
}