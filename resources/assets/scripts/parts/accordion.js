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

            $('.closet-header').on('click', function () {

                const $this = $(this);
                const $parent = $this.closest('.closet-item');
                const $container = $parent.parent();

                $container.find('.closet-header')
                    .not($this)
                    .removeClass('active')
                    .next('.closet-content')
                    .slideUp();

                $this.toggleClass('active');
                $this.next('.closet-content').stop(true, true).slideToggle();

            });


            $('.faq-trigger').on('click', function () {

                const index = $(this).data('index');
                const $targetItem = $('.closet-item[data-index="' + index + '"]');
                const $targetHeader = $targetItem.find('.closet-header');

                if ($targetHeader.length) {

                    $targetHeader.trigger('click');

                    $('html, body').animate({
                        scrollTop: $targetItem.offset().top - 200
                    }, 600);

                }

            });

        });

    }
}