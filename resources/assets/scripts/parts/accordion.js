export class Accordion {
    init() {
        this.ImageAccordion();
        this.Accordion();
    }
    ImageAccordion() {

        $(document).ready(function () {

            const $items = $('.image-item');
            const $sticky = $('.sticky-bar-section');

            $('.image-content').hide();

            // -----------------------------
            // Open first item by default
            // -----------------------------
            if ($items.length) {
                const $first = $items.first();
                $first.addClass('active');
                $first.find('.image-header').addClass('active');
                $first.find('.image-content').show();
            }

            // -----------------------------
            // Accordion Click
            // -----------------------------
            $('.image-header').on('click', function () {

                const $header = $(this);
                const $item = $header.closest('.image-item');
                const $content = $item.find('.image-content');

                // If already active → do nothing (strict accordion)
                if ($header.hasClass('active')) return;

                // Close all
                $('.image-item.active')
                    .removeClass('active')
                    .find('.image-header')
                    .removeClass('active')
                    .end()
                    .find('.image-content')
                    .stop(true, true)
                    .slideUp(300);

                // Open clicked
                $item.addClass('active');
                $header.addClass('active');

                $content
                    .stop(true, true)
                    .slideDown(300);

            });

            // -----------------------------
            // FAQ Trigger Scroll
            // -----------------------------
            $('.faq-trigger').on('click', function () {

                const targetId = $(this).data('target');
                const $target = $('#' + targetId);

                if (!$target.length) return;

                const stickyHeight = $sticky.length ? $sticky.outerHeight(true) : 0;

                function scrollToTarget() {
                    $('html, body')
                        .stop(true, true)
                        .animate({
                            scrollTop: $target.offset().top - stickyHeight - 50
                        }, 500);
                }

                // If target is accordion item
                if ($target.hasClass('image-item')) {

                    const $header = $target.find('.image-header');
                    const $content = $target.find('.image-content');

                    // Already open → just scroll
                    if ($header.hasClass('active')) {
                        scrollToTarget();
                        return;
                    }

                    // Close currently open
                    $('.image-item.active')
                        .removeClass('active')
                        .find('.image-header')
                        .removeClass('active')
                        .end()
                        .find('.image-content')
                        .stop(true, true)
                        .slideUp(300);

                    // Open target
                    $target.addClass('active');
                    $header.addClass('active');

                    // Wait until animation COMPLETELY finishes
                    $content
                        .stop(true, true)
                        .slideDown(300)
                        .promise()
                        .done(function () {

                            // Let browser recalc layout before scroll
                            setTimeout(function () {
                                scrollToTarget();
                            }, 50);

                        });

                } else {
                    scrollToTarget();
                }

            });

        });
    }

    Accordion() {
        $(document).ready(function () {
            // Open the first child by default
            $('.closet-header').first().addClass('active').next('.closet-content').slideDown();

            // Handle click events for closet headers
            $('.closet-header').click(function () {
                $(this).toggleClass('active').next('.closet-content').slideToggle();
                $('.closet-header').not(this).removeClass('active').next('.closet-content').slideUp();
            });
        });
    }
}