export class Truncate {
    init() {
        jQuery(function ($) {

            $('.read-more-wrapper').each(function () {

                var $wrapper = $(this);
                var $text = $wrapper.find('.faq-content');

                if ($wrapper.hasClass('rm-initialized')) return;
                $wrapper.addClass('rm-initialized');

                var maxLength = $text.data('max-length');
                if (!maxLength) return;

                var fullText = $.trim($text.text());
                if (fullText.length <= maxLength) return;

                var trimmedText = fullText.substring(0, maxLength);

                $text.data('full-text', fullText);
                $text.data('trimmed-text', trimmedText);

                $text.html(trimmedText +
                    ' <a href="javascript:void(0);" class="read-toggle satoshi-regular font14 leading22 res-font12 res-leading16 text-white text-decoration-none">Read More</a>'
                );

            });

            $(document).on('click', '.read-toggle', function () {

                var $btn = $(this);
                var $text = $btn.closest('.faq-content');
                var fullText = $text.data('full-text');
                var trimmedText = $text.data('trimmed-text');

                if ($btn.hasClass('expanded')) {
                    $text.html(trimmedText +
                        ' <a href="javascript:void(0);" class="read-toggle satoshi-regular font14 leading22 res-font12 res-leading16 text-white text-decoration-none">Read More</a>'
                    );
                } else {
                    $text.html(fullText +
                        ' <a href="javascript:void(0);" class="read-toggle expanded satoshi-regular font14 leading22 res-font12 res-leading16 text-white text-decoration-none">Read Less</a>'
                    );
                }

            });

        });
    }
}