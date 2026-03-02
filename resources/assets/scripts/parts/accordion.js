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

                const stickyHeight = $('.sticky-bar-section').outerHeight(true) || 0;

                function scrollToTarget(callback) {
                    // Measure after layout has stabilized
                    requestAnimationFrame(() => {
                        const top = $target[0].getBoundingClientRect().top + window.pageYOffset;
                        window.scrollTo({
                            top: top - stickyHeight - 100,
                            behavior: 'smooth'
                        });

                        // Wait until scroll finishes (approximate using setTimeout)
                        if (callback) setTimeout(callback, 500); // adjust 300ms if needed
                    });
                }

                if ($target.hasClass('image-item')) {
                    const $header = $target.find('.image-header');
                    const $content = $target.find('.image-content');

                    if ($header.hasClass('active')) return; // already open

                    // Close currently open
                    $('.image-item.active')
                        .removeClass('active')
                        .find('.image-header')
                        .removeClass('active')
                        .end()
                        .find('.image-content')
                        .stop(true, true)
                        .slideUp(0);

                    // Scroll first, then open
                    scrollToTarget(function () {
                        $target.addClass('active');
                        $header.addClass('active');
                        $content.stop(true, true).slideDown(300);
                    });
                } else {
                    scrollToTarget();
                }
            });

        });
    }

    // Accordion() {
    //     $(document).ready(function () {
    //         // Open the first child by default
    //         $('.closet-header').first().addClass('active').next('.closet-content').slideDown();

    //         // Handle click events for closet headers
    //         $('.closet-header').click(function () {
    //             $(this).toggleClass('active').next('.closet-content').slideToggle();
    //             $('.closet-header').not(this).removeClass('active').next('.closet-content').slideUp();
    //         });
    //     });
    // }

    Accordion() {
        $(document).ready(function () {

            // Hide all content
            $('.closet-content').hide();

            // Open first item
            const firstHeader = $('.closet-header').first();
            firstHeader.addClass('active');
            firstHeader.next('.closet-content')
                .show()
                .addClass('show-fade');

            // Click handler
            $('.closet-header').click(function () {

                const content = $(this).next('.closet-content');

                if ($(this).hasClass('active')) {

                    $(this).removeClass('active');
                    content.removeClass('show-fade').slideUp();

                } else {

                    $('.closet-header').removeClass('active');
                    $('.closet-content')
                        .removeClass('show-fade')
                        .slideUp();

                    $(this).addClass('active');
                    content.slideDown(function () {
                        content.addClass('show-fade');
                    });
                }
            });
        });
    }
}