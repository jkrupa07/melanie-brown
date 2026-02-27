export class Accordion {

    init() {
        this.bindAccordion();
    }

    bindAccordion() {

        $(document).ready(function () {

            /* -----------------------------
               DEFAULT OPEN FIRST ACCORDION
            ------------------------------*/

            $('.image-faq').each(function () {

                const $container = $(this);

                $container.find('.closet-item').each(function (index) {

                    const $header  = $(this).find('.closet-header');
                    const $content = $(this).find('.closet-content');

                    if (index === 0) {
                        $header.addClass('active');
                        $content.show();
                    } else {
                        $content.hide();
                    }

                });

            });


            /* -----------------------------
               ACCORDION CLICK
            ------------------------------*/

            $(document).on('click', '.closet-header', function () {

                const $this      = $(this);
                const $parent    = $this.closest('.closet-item');
                const $container = $parent.closest('.image-faq');

                $container.find('.closet-header')
                    .not($this)
                    .removeClass('active')
                    .next('.closet-content')
                    .stop(true, true)
                    .slideUp();

                $this.toggleClass('active');
                $this.next('.closet-content')
                    .stop(true, true)
                    .slideToggle();

            });


            /* -----------------------------
               STICKY BUTTON CLICK
            ------------------------------*/

            $(document).on('click', '.faq-trigger', function () {

                const targetId = $(this).data('target');
                const $target  = $('#' + targetId);

                if (!$target.length) return;

                // Smooth scroll
                $('html, body').animate({
                    scrollTop: $target.offset().top - 150
                }, 600);


                /* If target is accordion post → open it */
                if ($target.hasClass('closet-item')) {

                    const $header = $target.find('.closet-header');

                    if (!$header.hasClass('active')) {
                        $header.trigger('click');
                    }

                }

                /* If target is price card → do nothing else */

            });

        });

    }

}