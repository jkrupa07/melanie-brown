<?php
$consultation_content = get_field('consultation_content', 'option');
$follow_by = get_field('follow_by', 'option');
$footer_logo = get_field('footer_logo', 'option');
$address = get_field('address', 'option');
$contact_no = get_field('contact_no', 'option');
$email = get_field('email', 'option');
$footer_link = get_field('footer_link', 'option');
$social_media_content = get_field('social_media_content', 'option');
$footer_left_content = get_field('footer_left_content', 'option');
$site_by = get_field('site_by', 'option');
?>
<?php if ($consultation_content == 'yes'): ?>

    <section class="get-in-touch-block-section bg-AF9064 dpt-110 dpb-110">
        <div class="container">
            <div class="col-10 mx-auto">

                <?php if (! empty($consultation_content['title'])) : ?>
                    <div class="tk-ivypresto-display font50 leading71 fw-lighter text-white text-center mb-2">
                        <?php echo esc_html($consultation_content['title']); ?>
                    </div>
                <?php endif; ?>

                <?php if (! empty($consultation_content['description'])) : ?>
                    <div class="col-5 mx-auto satoshi-regular font16 leading20 text-white text-center dmb-40">
                        <?php echo esc_html($consultation_content['description']); ?>
                    </div>
                <?php endif; ?>

                <?php if (! empty($consultation_content['link'])) : ?>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="<?php echo esc_url($consultation_content['link']['url']); ?>"
                            class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">

                            <?php echo esc_html($consultation_content['link']['title']); ?>

                            <div class="btn-arrow ms-2 transition">
                                <img class="w-100"
                                    src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg"
                                    alt="">
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

<?php endif; ?>

<footer class="footer dpt-100 bg-49484F overflow-hidden">
    <div class="container">
        <?php if (!empty($follow_by)): ?>
            <div class="dmb-55">
                <div class="d-flex">
                    <div class="fst-italic tk-ivypresto-display fw-lighter font32 leading28_8 text-white me-2">
                        Follow along:
                    </div>
                    <a href="<?php echo $follow_by['url']; ?>" class="text-decoration-none tk-ivypresto-display fw-lighter font32 leading28_8 text-white">
                        <?php echo $follow_by['title']; ?>
                    </a>
                </div>

            </div>
        <?php endif; ?>

        <div class="footer-slider">
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer1.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer2.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer3.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer4.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer5.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer6.jpg" alt="Footer Logo">
            </div>
            <div class="footer-slider-image">
                <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/templates/icons/footer1.jpg" alt="Footer Logo">
            </div>
        </div>

        <div class="row justify-content-between align-items-start dpt-50 dpb-50">

            <div class="col-lg-5">
                <div class="row justify-content-between">
                    <?php if (!empty($footer_logo)): ?>
                        <div class="col-lg-2 footer-logo">
                            <img class="h-100" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['title']); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-8">
                        <?php if (!empty($address)): ?>
                            <div class="tk-ivypresto-display fw-lighter font18 leading25 text-white">
                                <?php echo $address; ?>
                            </div>
                        <?php endif; ?>

                        <div class="tk-ivypresto-display fw-lighter font18 leading38 text-white mt-2">
                            <?php if (!empty($contact_no)): ?>
                                <div class="tk-ivypresto-display fw-lighter font18 leading38 text-white dpt-25">
                                    Phone:
                                    <a href="tel:<?php echo $contact_no; ?>" class="text-decoration-none tk-ivypresto-display fw-lighter font18 leading38 text-white">
                                        <?php echo $contact_no; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($email)): ?>
                                <div class="tk-ivypresto-display fw-lighter font18 leading38 text-white dpt-25">
                                    Email:
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="text-decoration-none tk-ivypresto-display fw-lighter font18 leading38 text-white">
                                        <?php echo esc_html($email); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-between ps-2">
                    <div class="col-7">
                        <?php if (!empty($footer_link)): ?>

                            <?php
                            $columns = 3;
                            $total = min(count($footer_link), 9);
                            $items_per_column = ceil($total / $columns);
                            ?>

                            <div class="row">
                                <?php for ($i = 0; $i < $columns; $i++): ?>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <ul class="list-none ps-0">

                                            <?php
                                            $start = $i * $items_per_column;
                                            $end = min($start + $items_per_column, $total);

                                            for ($j = $start; $j < $end; $j++):
                                                $link = $footer_link[$j]['link'];
                                            ?>
                                                <li class="mb-3">
                                                    <a href="<?php echo $link['url']; ?>"
                                                        target="<?php echo ($link['target'] == '_blank') ? '_blank' : ''; ?>"
                                                        class="tk-ivypresto-display fw-lighter font16 leading28 text-decoration-none text-white text-capitalize">
                                                        <?php echo $link['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>

                                        </ul>
                                    </div>

                                <?php endfor; ?>
                            </div>

                        <?php endif; ?>
                    </div>

                    <div class="social-media-content col-lg-5 d-flex justify-content-end">
                        <?php if (!empty($social_media_content)):
                            foreach ($social_media_content as $media_content):
                                $image = $media_content['image'];
                                $url = $media_content['url'];
                        ?>
                                <div class="media-bg d-flex justify-content-center align-items-center rounded-circle me-2">
                                    <a href="<?php echo $url; ?>">
                                        <div class="media-img d-flex justify-content-center align-items-center">
                                            <img class="h-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                        </div>
                                    </a>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-between dpt-25 dpb-25 white-top-border1">
            <?php if (!empty($footer_left_content)): ?>
                <div class="col-md-6">
                    <div class="helvetica-medium font14 leading28 text-999999 text-capitalize">
                        <?php echo $footer_left_content; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($site_by)): ?>

                <div class="col-md-6 d-flex justify-content-end">
                    <a href="<?php echo $site_by['url']; ?>" class="helvetica-medium text-decoration-none font14 leading28 text-999999 text-uppercase text-end" target="<?php echo $site_by["target"] == "_blank" ? "_blank" : ''; ?>">
                        <?php echo $site_by['title']; ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</footer>