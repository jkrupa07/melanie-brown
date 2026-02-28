export class Accordion {
    init() {
        this.Accordion();
    }
    Accordion() {

        // $(document).ready(function () {

        //     $('.closet-item').each(function () {

        //         const $container = $(this).parent();

        //         $container.find('.closet-item').each(function (index) {

        //             const $header = $(this).find('.closet-header');
        //             const $content = $(this).find('.closet-content');

        //             if (index === 0) {
        //                 $header.addClass('active');
        //                 $(this).addClass('active'); // ✅ add this
        //                 $content.show();
        //             } else {
        //                 $content.hide();
        //             }

        //         });

        //     });

        //     $('.closet-header').on('click', function () {

        //         const $this = $(this);
        //         const $parent = $this.closest('.closet-item');
        //         const $container = $parent.parent();
        //         const $content = $this.next('.closet-content');

        //         if ($this.hasClass('active')) {

        //             $content.stop(true, true).slideUp(300, function () {
        //                 $this.removeClass('active');
        //                 $parent.removeClass('active'); // ✅ remove here
        //             });

        //         } else {

        //             $container.find('.closet-header.active')
        //                 .removeClass('active')
        //                 .next('.closet-content')
        //                 .stop(true, true)
        //                 .slideUp(300)
        //                 .closest('.closet-item') // ✅ go up
        //                 .removeClass('active');   // ✅ remove active from others

        //             $this.addClass('active');
        //             $parent.addClass('active'); // ✅ add here
        //             $content.stop(true, true).slideDown(300);

        //         }

        //     });

        //     $('.faq-trigger').on('click', function () {

        //         const targetId = $(this).data('target');
        //         const $targetItem = $('#' + targetId);

        //         if ($targetItem.length) {

        //             if ($targetItem.hasClass('closet-item')) {
        //                 const $targetHeader = $targetItem.find('.closet-header');

        //                 if (!$targetHeader.hasClass('active')) {
        //                     $targetHeader.trigger('click');
        //                 }
        //             }

        //             $('html, body').animate({
        //                 scrollTop: $targetItem.offset().top - 200
        //             }, 600);
        //         }

        //     });

        // });

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