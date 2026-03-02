<?php
$sub_treatment_title = get_field("sub_treatment_title");
$sub_treatment_description = get_field("sub_treatment_description");
$sub_treatment_group = get_field("sub_treatment_group");
$transformation_timeline = get_field("transformation_timeline");
$about_treatment_card = get_field("about_treatment_card");
$faq_group = get_field("faq_group");
?>
<section class="category-hero-section position-relative ">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="" class="w-100 h-100 object-cover">

    <div class="hero-content position-absolute bottom-0 dmb-65 w-100">
        <div class="container">
            <div class="row">

                <div class="col-7">
                    <div class="tk-ivypresto-display fw-lighter font70 leading71_8 text-white dmb-20">
                        <?php echo get_the_title(); ?>
                    </div>
                    <div class="satoshi-regular font18 leading27 text-white">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-end justify-content-end">
                    <a href="#" class="btnA link-btn satoshi-regular font14 space1 text-white d-flex align-items-end text-decoration-none transition">
                        <div class="btn-arrow pe-2 transition">
                            <img class="prev-arrow w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
                        </div>
                        Back to treatments
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="spacing dpb-135"></div>

<section class="treatments-cards-section">
    <div class="container">

        <div class="col-6 mx-auto align-items-center dmb-60">
            <?php if (!empty($sub_treatment_title)): ?>
                <div class="col-10 mx-auto tk-ivypresto-display font60 leading61_8 fw-lighter text-center text-49484F dmb-20">
                    <?php echo $sub_treatment_title; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($sub_treatment_description)): ?>
                <div class="right-description satoshi-regular font14 leading22 text-center text-666666 pe-4">
                    <?php echo $sub_treatment_description; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="row row36">
            <?php if (!empty($sub_treatment_group)):
                foreach ($sub_treatment_group as $sub_treatment):
                    $image = $sub_treatment['image'];
                    $title = $sub_treatment['title'];
                    $description = $sub_treatment['description'];
                    $link = $sub_treatment['link'];
            ?>
                    <div class="col-4 treatment-card dmb-110">
                        <div class="treatment-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="w-100 h-100 object-cover radius3"
                                    src="<?php echo $image['url']; ?>"
                                    alt="<?php echo $image['title']; ?>">
                            <?php endif; ?>
                        </div>

                        <div class="treatment-content pt-4">
                            <?php if (!empty($title)): ?>
                                <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                    <?php echo $title; ?>
                                </div>

                            <?php endif; ?>
                            <?php if (!empty($description)): ?>
                                <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                    <?php echo $description; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($link)): ?>
                                <a href="<?php echo $link['url']; ?>" class="btnB link-btn satoshi-regular font14 leading14 d-flex align-items-center text-decoration-none transition">
                                    <?php echo $link['title']; ?>
                                    <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                        <img class="w-100"
                                            src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                            alt="">
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
</section>

<?php if (!empty($transformation_timeline['duration_group'])): ?>
    <section class="treatments-timeline-section dpt-105 dpb-185 bg-49484F">
        <div class="container">
            <div class="tk-ivypresto-display fw-lighter font60 leading61_8 text-white text-center dpb-75">
                <?php if (!empty($transformation_timeline['main_title'])): ?>
                    <?php echo $transformation_timeline['main_title']; ?>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <?php foreach ($transformation_timeline['duration_group'] as $grp):
                        $title = $grp['title'];
                        $content = $grp['content'];
                    ?>
                        <div class="timeline-item">
                            <?php if (!empty($title)): ?>
                                <div class="tk-ivypresto-display fw-lighter font26 leading28_8 text-white dpt-20"><?php echo $title; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($content)): ?>
                                <div class="satoshi-regular font14 leading19 text-white pt-1">
                                    <?php echo $content; ?>.
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="white-bottom-border3 dpt-25"></div>
                        <?php endforeach ?>;
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <?php if (!empty($transformation_timeline['timeline_card_group'])):
                        foreach ($transformation_timeline['timeline_card_group'] as $timeline_grp):
                            $title = $timeline_grp['title'];
                            $about_timeline = $timeline_grp['about_timeline'];
                    ?>

                            <div class="timeline-card dpt-40 dpb-50 px-5 bg-FFFFFF1A radius3 dmb-15">
                                <?php if (!empty($title)): ?>
                                    <div class="satoshi-regular font20 leading32 text-white">
                                        <?php echo $title; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($about_timeline)): ?>
                                    <div class="satoshi-light font16 leading25_6 text-white pt-1">
                                        <?php echo $about_timeline; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($about_treatment_card['card_group'])): ?>
    <section class="treatment-experience-section position-relative dpt-135 dpb-230">
        <div class="container">
            <div class="row justify-content-center text-center dpb-60">
                <div class="col-lg-6">
                    <div class="col-7 mx-auto tk-ivypresto-display font42 leading44_2 fw-lighter text-494850">
                        <?php if (!empty($about_treatment_card['main_title'])): ?>
                            <?php echo $about_treatment_card['main_title']; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 cards-container position-relative">
                    <?php
                    if (!empty($about_treatment_card['card_group'])):
                        $count = 1;
                        foreach ($about_treatment_card['card_group'] as $card_groups):
                            $title       = $card_groups['title'] ?? '';
                            $description = $card_groups['description'] ?? '';
                    ?>
                            <div class="experience-card bg-F1DDD3 radius3 dpt-40 dpb-70 px-5 dmb-20">
                                <?php if (!empty($title)): ?>
                                    <div class="tk-ivypresto-display d-flex font32 leading28_8 fw-lighter text-49484F dpb-55">
                                        <div class="fst-italic text-999999 me-2">
                                            <?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?>.
                                        </div>
                                        <?php echo esc_html($title); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($description)): ?>
                                    <div class="experience-card-description pe-3">
                                        <div class="satoshi-regular font14 leading25_6 text-49484F">
                                            <?php echo wp_kses_post($description); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <?php $count++;
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($faq_group)):
?>
    <section class="faq-section dpb-185">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php
                    if (!empty($faq_group['faq_left_content'])):

                        $faq_left_content = $faq_group['faq_left_content'];

                        $title       = $faq_left_content['title'] ?? '';
                        $description = $faq_left_content['description'] ?? '';
                        $link        = $faq_left_content['link'] ?? null;
                    ?>

                        <?php if (!empty($title)): ?>
                            <div class="tk-ivypresto-display font42 leading44_2 text-494850 fw-lighter dpb-25">
                                <?php echo esc_html($title); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($description)): ?>
                            <div class="satoshi-regular font14 leading22 text-494850 dpb-25">
                                <?php echo wp_kses_post($description); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($link) && !empty($link['url'])): ?>
                            <a href="<?php echo esc_url($link['url']); ?>"
                                target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                                class="btnA border-494850-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">

                                <?php echo esc_html($link['title']); ?>

                                <div class="btn-arrow ms-2 transition">
                                    <img class="w-100"
                                        src="<?php echo esc_url(get_template_directory_uri() . '/templates/icons/gray-arrow.svg'); ?>"
                                        alt="">
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-8 offset-1">
                    <div class="category-faq">

                        <?php if (!empty($faq_group['faq_right_content'])):
                            foreach ($faq_group['faq_right_content'] as $row):
                                $title = $row['title'];
                                $description = $row['description'];
                        ?>
                                <div class="closet-item dark-border bg-268a85">
                                    <div class="closet-header d-flex align-items-center cursor-pointer justify-content-between dpb-35 dpt-30">
                                        <?php if (!empty($row['title'])): ?>
                                            <div class="satoshi-regular font20 leading32 text-black">
                                                <?php echo $row['title']; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="icon-bg d-flex justify-content-center align-items-center"><img class="transition" src="assets/images/accordion-plus.svg" alt=""></div>
                                    </div>
                                    <div class="closet-content dpb-75">
                                        <?php if (!empty($row['description'])): ?>
                                            <div class="satoshi-light font16 leading25_6 text-black pb-4">
                                                <?php echo $row['description']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>