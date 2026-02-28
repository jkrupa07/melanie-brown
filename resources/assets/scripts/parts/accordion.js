export class Accordion {
    init() {
        this.Accordion();
    }
    Accordion() {

        $(document).ready(function () {

            $('.closet-item').each(function () {

                const $container = $(this).parent();

                $container.find('.closet-item').each(function (index) {

                    const $header = $(this).find('.closet-header');
                    const $content = $(this).find('.closet-content');

                    if (index === 0) {
                        $header.addClass('active');
                        $content.show();
                    } else {
                        $content.hide();
                    }

                });

            });

            // $('.closet-header').on('click', function () {

            // const $this = $(this);
            // const $parent = $this.closest('.closet-item');
            // const $container = $parent.parent();

            // $container.find('.closet-header')
            // .not($this)
            // .removeClass('active')
            // .next('.closet-content')
            // .slideUp();

            // $this.toggleClass('active');
            // $this.next('.closet-content').stop(true, true).slideToggle();

            // });
            $('.closet-header').on('click', function () {

                const $this = $(this);
                const $parent = $this.closest('.closet-item');
                const $container = $parent.parent();
                const $content = $this.next('.closet-content');

                if ($this.hasClass('active')) {

                    $content.stop(true, true).slideUp(300, function () {
                        $this.removeClass('active');
                    });

                } else {

                    $container.find('.closet-header.active')
                        .removeClass('active')
                        .next('.closet-content')
                        .stop(true, true)
                        .slideUp(300);

                    $this.addClass('active');
                    $content.stop(true, true).slideDown(300);

                }

            });


            // $('.faq-trigger').on('click', function () {

            //     const index = $(this).data('index');
            //     const $targetItem = $('.closet-item[data-index="' + index + '"]');
            //     const $targetHeader = $targetItem.find('.closet-header');

            //     if ($targetHeader.length) {

            //         $targetHeader.trigger('click');

            //         $('html, body').animate({
            //             scrollTop: $targetItem.offset().top - 200
            //         }, 600);

            //     }

            // });

            $('.faq-trigger').on('click', function () {

                const targetId = $(this).data('target');
                const $targetItem = $('#' + targetId);

                if ($targetItem.length) {

                    // If it's inside accordion (post-xxx)
                    if ($targetItem.hasClass('closet-item')) {
                        const $targetHeader = $targetItem.find('.closet-header');

                        if (!$targetHeader.hasClass('active')) {
                            $targetHeader.trigger('click');
                        }
                    }

                    $('html, body').animate({
                        scrollTop: $targetItem.offset().top - 200
                    }, 600);
                }

            });

        });

    }
}