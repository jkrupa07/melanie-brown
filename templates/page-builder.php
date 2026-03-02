<?php

/* Template Name: Page Builder */

?>
<?php if (have_rows("flexible_content")):
    while (have_rows("flexible_content")):
        the_row(); ?>
        <?php if (get_row_layout() == 'hero_section'):
            $media_type = get_sub_field('media_type');
            $image = get_sub_field('image');
            $video = get_sub_field('video');
            $youtube = get_sub_field('youtube');
            $vimeo = get_sub_field('vimeo');
            $hero_title = get_sub_field('hero_title');
            $hero_description = get_sub_field('hero_description');
            $hero_link = get_sub_field('hero_link');
        ?>
            <section class="hero-section position-relative h-vh overflow-hidden">

                <div class="hero-layer position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="position-relative h-100">
                    <?php if ($media_type == 'image' && !empty($image)): ?>
                        <img class="w-100 h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    <?php endif; ?>
                    <!-- video -->
                    <?php if ($media_type == 'video' && !empty($video)): ?>
                        <video class="w-100 h-100 object-cover" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                            src="<?php echo $video['url']; ?>" data-object-fit="cover"></video>
                    <?php endif; ?>

                    <!-- youtube -->
                    <?php if ($media_type == 'youtube' && !empty($youtube)) : ?>
                        <iframe class="w-100 h-100 bg-black object-cover"
                            src="https://www.youtube.com/embed/<?php echo esc_attr($youtube); ?>?autoplay=1&mute=1&controls=0&rel=0&playsinline=1&loop=1&playlist=<?php echo esc_attr($youtube); ?>"
                            frameborder="0"
                            allow="autoplay; fullscreen"
                            allowfullscreen>
                        </iframe>
                    <?php endif; ?>

                    <!-- vimeo -->

                    <?php if ($media_type == 'vimeo' && !empty($vimeo)) : ?>
                        <iframe class="w-100 h-100 bg-black object-cover"
                            src="https://player.vimeo.com/video/<?php echo esc_attr($vimeo); ?>?autoplay=1&loop=1&muted=1&background=1&title=0&byline=0&portrait=0"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    <?php endif; ?>
                </div>
                <div class="hero-content position-absolute bottom-0 dmb-80 tmb-70 w-100 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="container">
                        <div class="col-lg-7">
                            <div class="tk-ivypresto-display fw-lighter font70 leading71_8 res-font40 res-leading45_8 text-white dmb-20">
                                <?php if (!empty($hero_title)): ?>
                                    <?php echo $hero_title; ?>
                                <?php endif; ?>
                            </div>
                            <div class="satoshi-regular font18 leading27 res-font16 res-leading20 text-white dmb-30 pe-lg-0 pe-sm-3">
                                <?php if (!empty($hero_description)): ?>
                                    <?php echo $hero_description; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($hero_link)): ?>
                            <div class="">
                                <a class="btnA bg-AF9064-btn d-inline-flex satoshi-regular font14 space1 leading14 justify-content-center align-items-center text-decoration-none transition"
                                    href="<?php echo $hero_link['url']; ?>">
                                    <?php echo $hero_link['title']; ?>
                                    <div class="btn-arrow d-flex align-items-end ms-2">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'left_right_media_section'):
            $media_select = get_sub_field('media_select');
            $image = get_sub_field('image');
            $video = get_sub_field('video');
            $media_direction = get_sub_field('media_direction');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
        ?>

            <section class="left-right-media-section bg-F1DDD3">
                <div class="container">
                    <div class="row align-items-center wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if ($media_select == 'image' && $media_direction == 'left'): ?>
                            <div class=" col-lg-4">
                                <div class="left-image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($media_select == 'video' && $media_direction == 'left'): ?>
                            <div class="col-lg-5 mx-auto pe-lg-5 left-image radius3 overflow-hidden dmb-25">
                                <video class="w-100 h-100 object-cover" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                                    src="<?php echo $video['url']; ?>" data-object-fit="cover"></video>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6 ps-lg-3 pe-lg-5">
                            <?php if (!empty($title)): ?>
                                <div class="tk-ivypresto-display font42 leading44_2 res-font25 res-leading35_2 fw-lighter text-494850 dmb-15">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($title)): ?>
                                <div class="satoshi-regular col-lg-11 font14 leading22 res-font14 res-leading22 text-494850 dmb-20">
                                    <?php echo $description; ?> </div>
                            <?php endif; ?>
                            <?php if (!empty($link)): ?>
                                <a href="<?php echo $link['url']; ?>" class="btnA border-494850-btn satoshi-regular font14 space1 leading14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                    <?php echo $link['title']; ?>

                                    <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                        <img class="w-100 " src="<?php echo get_template_directory_uri(); ?>/templates/icons/grey-btn-arrow.svg" alt="Arrow Icon">
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                        <?php if ($media_select == 'image' && $media_direction == 'right'): ?>
                            <div class="col-lg-4 offset-1">
                                <div class="left-image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($media_select == 'video' && $media_direction == 'right'): ?>
                            <div class="col-lg-5 left-image radius3 overflow-hidden">
                                <video class="w-100 h-100 object-cover" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                                    src="<?php echo $video['url']; ?>" data-object-fit="cover"></video>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'left_right_image_section'):
            $background_color = get_sub_field('background_color');
            $media_direction = get_sub_field('media_direction');
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
        ?>

            <section class="left-right-image-section <?php echo ($background_color == "bg-49484F") ? 'bg-49484F' : 'bg-F1DDD3'; ?>">
                <div class="container">
                    <div class="row justify-content-between align-items-center wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if ($media_direction == 'left'): ?>
                            <div class="col-lg-5 col-12 pe-lg-2 left-right-image tmb-25">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6 col-12 pe-lg-1">
                            <?php if (!empty($title)): ?>
                                <div class="left-right-title col-lg-9 tk-ivypresto-display font42 leading44_2 res-font25 res-leading30 fw-lighter text-494850 dmb-20 tmb-15">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($description)): ?>
                                <div class="left-right-description satoshi-regular font14 leading22 res-leading22_6 text-666666">
                                    <?php echo $description; ?> </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($media_direction == 'right'): ?>
                            <div class="col-lg-5 ps-lg-2 left-right-image dmb-20 tmb-25">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'faq_section'):
            $left_content = get_sub_field('left_content');
            $right_content = get_sub_field('right_content');
        ?>

            <section class="faq-section dark-bg-faq bg-7E7C8B dpt-95 dpb-90 tpt-65 tpb-50">
                <div class="container">
                    <div class="row wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <div class=" col-lg-3">
                            <?php if (!empty($left_content['title'])): ?>
                                <div class="tk-ivypresto-display font42 leading44_2 res-font35 res-leading40_2 text-white fw-lighter dmb-25">
                                    <?php echo $left_content['title']; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($left_content['title'])): ?>
                                <div class="satoshi-regular font14 leading22 text-white dmb-25 pe-lg-0">
                                    <?php echo $left_content['content']; ?>
                                </div>
                            <?php endif; ?>

                            <a href="<?php echo $left_content['link']['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition tmb-60">
                                <?php echo $left_content['link']['title']; ?>
                                <div class="btn-arrow ms-2 transition">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-8 offset-lg-1">
                            <div class="category-faq">
                                <?php if (!empty($right_content)):
                                    foreach ($right_content as $contents):
                                        $title = $contents['title'];
                                        $content = $contents['content'];
                                ?>
                                        <div class="closet-item white-border bg-268a85 dpb-30 dpt-30 tpb-25 tpt-25">
                                            <div class="closet-header">
                                                <div class="d-flex align-items-center cursor-pointer justify-content-between  transition">
                                                    <div class="satoshi-regular font20 leading32 res-font18 res-leading22 text-white"><?php echo $title; ?></div>
                                                    <div class="icon-bg d-flex justify-content-center align-items-center">
                                                        <img class="transition" src="<?php echo get_template_directory_uri(); ?>/templates/icons/accordion-plus.svg" alt="Accordion Icon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="closet-content dpt-15 tpb-10 dpb-20">
                                                <div class="satoshi-light font16 leading25_6 res-font14 res-leading22_6  text-white">
                                                    <?php echo $content; ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'sticky_content_section'):
            $left_content = get_sub_field('left_content');
            $right_content = get_sub_field('right_content');
        ?>

            <section class="sticky-content-section overflow-hidden h-vh">

                <div class="sticky-content-wrapper row">
                    <?php if (!empty($left_content)): ?>

                        <div class="col-lg-6 col-12 position-relative h-100">
                            <div class="left-content d-flex align-items-center h-100 overflow-hidden bg-49484F dpt-135 dpb-135 tpt-60 tpb-60">

                                <div class="image-wrapper position-relative d-flex align-items-center col-lg-6 mx-auto ">
                                    <div class="image-layer position-absolute top-0 start-0 w-100 h-100"></div>
                                    <img src="<?php echo $left_content['image']['url']; ?>" class="w-100 h-100 object-cover" alt="<?php echo $left_content['image']['title']; ?>">
                                </div>
                                <div class="text-wrapper w-100 position-absolute top-left-center">
                                    <div class="tk-ivypresto-display fw-lighter font60 leading61_8 res-font40 res-leading45_8 text-white text-center col-lg-8 mx-auto">
                                        <?php echo $left_content['title']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-6 col-12 bg-7E7C8B position-relative">
                        <div class="inner-content-layer position-fixed end-0 w-50"></div>
                        <div class="right-scroll-content h-100 position-relative overflow-hidden">
                            <div class="inner-content h-100 overflow- hidden">

                                <?php if (!empty($right_content)):
                                    foreach ($right_content as $contents):
                                        $image = $contents['image'];
                                        $title = $contents['title'];
                                        $description = $contents['description'];
                                ?>

                                        <div class="content-item col-xl-8 col-lg-10 col-11 mx-auto dpt-200 dpb-130 tpt-65 tpb-65 ">
                                            <div class="content-img text-center">
                                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                                            </div>
                                            <div
                                                class="content-title tk-ivypresto-display fw-lighter font32 leading28_8 res-font25 res-leading30_8 text-white dpt-30 tpt-15 text-center">
                                                <?php echo $title; ?>
                                            </div>
                                            <div class="content-desc satoshi-regular font14 leading19 text-white dpt-20 text-center px-lg-3 px-lg-4 px-1">
                                                <?php echo $description; ?>
                                            </div>
                                        </div>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'treatment_slider_section'):

            $slider_select     = get_sub_field('slider_select');
            $select_treatment  = get_sub_field('select_treatment');
            $title             = get_sub_field('title');
            $link              = get_sub_field('link');
        ?>
            <section class="treatment-slider-section overflow-hidden">
                <div class="container">

                    <div class="row dmb-60 tmb-0 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <div class="col-lg-6 col-12 tmb-30">
                            <?php if (!empty($title)) : ?>
                                <div class="tk-ivypresto-display font41 leading44_2 res-font28 res-leading40 fw-lighter text-494850">
                                    <?php echo esc_html($title); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 col-12 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="slick-arrows-wrapper d-flex align-items-center justify-content-center pe-lg-4 pt-lg-0 tmb-40">
                                <div class="prev-arrow d-flex align-items-center cursor-pointer me-3">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                                </div>
                                <div class="next-arrow d-flex align-items-center cursor-pointer">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                                </div>
                            </div>
                            <?php if (!empty($link)): ?>
                                <div class="text-center">
                                    <a href="<?php echo $link['url']; ?>" class="btnA bg-AF9064-btn  d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                        <div class="satoshi-regular font14 leading14">
                                            <?php echo $link['title']; ?>
                                        </div>
                                        <div class="btn-arrow ms-2 transition">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                                        </div>
                                    </a>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="explore-treatment-slider col-lg-11 col-10 order-2 order-lg-3 tmb-70">

                        <?php if ($slider_select === 'all') : ?>

                            <?php
                            $args = array(
                                'post_type'      => 'treatments',
                                'posts_per_page' => -1,
                                'orderby'        => 'date',
                                'order'          => 'ASC',
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                            ?>

                                    <div class="treatment-card">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">

                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="treatment-image dmb-25">
                                                    <?php the_post_thumbnail('medium', [
                                                        'class' => 'w-100 h-100 object-cover radius3'
                                                    ]); ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="treatment-content">
                                                <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                    <?php the_title(); ?>
                                                </div>

                                                <div class="treatment-description col-11 satoshi-regular font14 leading19 text-49484F mb-3">
                                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                                </div>

                                                <div class="btnB link-btn satoshi-regular font14 space1 leading14 d-flex align-items-center transition">
                                                    Learn more
                                                    <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                        <img class="w-100"
                                                            src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                            alt="Arrow Icon">
                                                    </div>
                                                </div>
                                            </div>

                                        </a>
                                    </div>

                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                        <?php elseif ($slider_select === 'select' && !empty($select_treatment)) : ?>

                            <?php foreach ($select_treatment as $post) : setup_postdata($post); ?>

                                <div class="treatment-card">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">

                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="treatment-image dmb-25">
                                                <?php the_post_thumbnail('medium', [
                                                    'class' => 'w-100 h-100 object-cover radius3'
                                                ]); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="treatment-content">
                                            <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                <?php the_title(); ?>
                                            </div>

                                            <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                                            </div>

                                            <div class="btnB link-btn satoshi-regular space1 font14 leading14 d-flex align-items-center transition">
                                                Learn more
                                                <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                    <img class="w-100"
                                                        src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                        alt="Arrow Icon">
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        <?php endif; ?>

                    </div>

                    <div class="col-lg-6 col-12 d-lg-none d-flex flex-column align-items-center justify-content-end">
                        <div class="slick-arrows-wrapper d-flex align-items-center justify-content-center pe-lg-4 pt-lg-0 tmb-40">
                            <div class="prev-arrow cursor-pointer me-3">
                                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                            </div>
                            <div class="next-arrow cursor-pointer">
                                <img class=" w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                            </div>
                        </div>
                        <?php if (!empty($link)): ?>
                            <div class="text-center">
                                <a href="<?php echo $link['url']; ?>" class="btnA bg-AF9064-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                    <?php echo $link['title']; ?>
                                    <div class="btn-arrow ms-2 transition">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                </div>
            </section>

        <?php elseif (get_row_layout() == 'key_qualitifications_section'):
            $other_content     = get_sub_field('other_content');
            $qualitifications_group     = get_sub_field('qualitifications_group');
            $main_title     = get_sub_field('main_title');

        ?>
            <section class="qualification-section">
                <div class="container">
                    <div class="tk-ivypresto-display fw-lighter font41 leading44_2 res-font35 text-494850 dpb-25 tpb-45 wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $main_title; ?></div>
                    <div class="wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if ($qualitifications_group): ?>
                            <?php foreach ($qualitifications_group as $qualitifications):
                                $degree_name     = $qualitifications['degree_name'];
                                $university_name  = $qualitifications['university_name'];
                                $year             = $qualitifications['year'];
                            ?>
                                <div class="row dark-border dpt-20 dpb-25 tpb-30 tpt-30">
                                    <div class="col-lg-5 col-12">
                                        <div class="satoshi-regular font16 leading25_6 res-font14 res-leading24_6 text-black tpb-10"><?php echo $degree_name; ?></div>
                                    </div>
                                    <div class="col-lg-3 col-6 offset-lg-1">
                                        <div class="satoshi-light font16 leading25_6 res-font14 res-leading24_6 text-black"><?php echo $university_name; ?></div>
                                    </div>
                                    <div class="col-lg-3 col-6 text-end">
                                        <div class="satoshi-light font16 leading25_6 res-font14 res-leading24_6 text-black"><?php echo $year; ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="row dark-border dpt-20 dpb-25 tpb-0 tpt-30">
                            <div class="col-lg-5">
                                <div class="satoshi-regular font16 leading25_6 text-black">
                                    <?php echo $other_content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'center_content_section'):
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
        ?>

            <section class="center-content-section">
                <div class="container">
                    <div class="col-xl-5 col-lg-8 col-12 mx-auto wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if (!empty(($title))): ?>
                            <div class="tk-ivypresto-display fw-lighter font60 leading61_8 res-font35 res-leading40_8 text-49484F text-capitalize text-center dmb-25">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty(($description))): ?>
                            <div class="section-description text-center">
                                <div class="satoshi-regular font14 leading22 text-666666 dmb-20">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty(($link))): ?>
                            <div class="text-center">
                                <a class="satoshi-regular font14 leading22 text-666666 dmb-20" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>


            <!-- END -->

        <?php elseif (get_row_layout() == 'treatment_filter_section') :

            $filter_selection  = get_sub_field('filter_selection');
            $filter_price_card = get_sub_field('filter_price_card');
            $about_treatments = get_field('about_treatments');
        ?>

            <?php if (!empty($filter_price_card) || !empty($filter_selection)) : ?>

                <div class="sticky-bar-section col-lg-10 mx-auto position-fixed bottom-0 w-100 bg-49484F73 z-3">
                    <div class="container px-p-0">
                        <div class="sticky-bar-wraper  d-flex justify-content-center overflow-auto">

                            <?php
                            $price_index = 0;
                            if (!empty($filter_price_card)) :
                                foreach ($filter_price_card as $card) :
                                    if (!empty($card['title'])) :
                            ?>
                                        <div class="item px-lg-2 me-2 py-lg-3 py-2">
                                            <button
                                                class="faq-trigger satoshi-regular  font14 leading22_4 res-font12 res-leading20_4 text-nowrap text-F1DDD3 border-0 bg-transparent"
                                                data-target="price-card-<?php echo $price_index; ?>">
                                                <?php echo esc_html($card['title']); ?>
                                            </button>
                                        </div>
                                    <?php
                                        $price_index++;
                                    endif;
                                endforeach;
                            endif;

                            if (!empty($filter_selection)) :
                                foreach ($filter_selection as $post_id) :
                                    $post_id = is_object($post_id) ? $post_id->ID : $post_id;
                                    ?>
                                    <div class="item px-lg-2 me-2 py-lg-3 py-2">
                                        <button
                                            class="faq-trigger satoshi-regular  font14 leading22_4 res-font12 res-leading20_4 text-nowrap text-F1DDD3 border-0 bg-transparent"
                                            data-target="post-<?php echo esc_attr($post_id); ?>">
                                            <?php echo esc_html(get_the_title($post_id)); ?>
                                        </button>
                                    </div>
                            <?php
                                endforeach;
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
                <div class="consultation-card">
                    <div class="container">
                        <?php
                        $consultation_index = 0;

                        if (!empty($filter_price_card)) :
                            foreach ($filter_price_card as $item) :

                                $title   = $item['title'];
                                $price   = $item['price'];
                                $content = $item['content'];
                        ?>

                                <div class="consultation-card-wrapper col-lg-10 col-12 dpb-70 tpb-40 mx-auto dpt-35 dpb-20 dmb-95 tmb-40"
                                    id="price-card-<?php echo esc_attr($consultation_index); ?>">

                                    <div class="d-flex align -items-center justify-content-between dmb-25">

                                        <?php if (!empty($title)) : ?>
                                            <div class="tk-ivypresto-display fw-lighter font32 leading28_8 res-font22 res-leading22 text-capitalize text-49484F">
                                                <?php echo esc_html($title); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($price)) : ?>
                                            <div class="satoshi-regular font22 leading38_4 text-494850 res-font22 res-leading22">
                                                <?php echo esc_html($price); ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <?php if (!empty($content)) : ?>
                                        <div class="consultation-card-content col-lg-10 col-12">
                                            <div class="satoshi-regular font14 leading22 res-font12 res-leading20 text-494850">
                                                <?php echo wp_kses_post($content); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>

                        <?php
                                $consultation_index++;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <?php if (!empty($filter_selection)) : ?>

                    <section class="image-faq-section">
                        <div class="container">
                            <div class="col-lg-10 col-12 mx-auto">
                                <div class="image-faq">

                                    <?php foreach ($filter_selection as $post_id) :

                                        $post_id = is_object($post_id) ? $post_id->ID : $post_id;

                                        $image          = get_the_post_thumbnail_url($post_id, 'large');
                                        $content        = get_post_field('post_content', $post_id);
                                        $standard_areas = get_field('treatment_standard_area', $post_id);
                                        $about_treatments = get_field('about_treatments', $post_id);
                                    ?>

                                        <div class="image-item radius3 dmb-20"
                                            id="post-<?php echo esc_attr($post_id); ?>">

                                            <div class="image-header d-flex align-items-center justify-content-between cursor-pointer">

                                                <div class="image-header-title tk-ivypresto-display fw-lighter font32 leading28_8 res-font22 res-leading22_6 text-black">
                                                    <?php echo esc_html(get_the_title($post_id)); ?>
                                                </div>

                                                <div class="icon-bg d-flex align-items-center">
                                                    <img
                                                        class="w-100"
                                                        src="<?php echo get_template_directory_uri(); ?>/templates/icons/accordion-plus.svg"
                                                        alt="Accordion Icon">
                                                </div>
                                            </div>
                                            <div class="image-content hero-style-content bg-000000A">

                                                <?php if ($image) : ?>
                                                    <div class="image-faq-hero position-relative overflow-hidden">
                                                        <div class="image-faq-hero-layer position-absolute top-0 start-0 w-100 h-100"></div>
                                                        <div class="faq-img">
                                                            <img src="<?php echo esc_url($image); ?>"
                                                                alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                                                class="w-100 h-100 object-cover radius3">
                                                        </div>

                                                        <div class="image-faq-hero-content position-absolute bottom-0 dmb-60 tmb-20 w-100 px-lg-5 px-3">
                                                            <div class="col-md-10 col-11">
                                                                <div class="tk-ivypresto-display fw-lighter font32 leading28_8 res-font22 res-leading24_6 text-white text-capitalize dmb-20 tmb-10">
                                                                    <?php echo esc_html(get_the_title($post_id)); ?>
                                                                </div>

                                                                <div class="position-relative read-more-wrapper satoshi-regular font14 leading22 res-font12 res-leading16 text-white">
                                                                    <div class="col-md-10 col-12 pe-3 faq-content transition" data-max-length="360">
                                                                        <?php echo esc_html($about_treatments); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>


                                                <?php if (!empty($standard_areas)) : ?>

                                                    <?php foreach ($standard_areas as $area) :

                                                        $area_title   = $area['title'] ?? '';
                                                        $area_content = $area['content'] ?? '';
                                                        $price_group  = $area['price_group'] ?? [];
                                                    ?>

                                                        <div class="image-faq-areas dpt-80 dpb-30 tpt-25 ">

                                                            <?php if ($area_title) : ?>
                                                                <div class="tk-ivypresto-display fw-lighter font26 res-font18 res-leading20_4 text-49484F dmb-5 tmb-10">
                                                                    <?php echo esc_html($area_title); ?>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if ($area_content) : ?>
                                                                <div class="satoshi-regular font14 res-font12 res-leading16 text-666666 tmb-10">
                                                                    <?php echo esc_html($area_content); ?>
                                                                </div>
                                                            <?php endif; ?>


                                                            <?php if (!empty($price_group)) : ?>

                                                                <?php foreach ($price_group as $price) :

                                                                    $price_title   = $price['title'] ?? '';
                                                                    $price_content = $price['content'] ?? '';
                                                                ?>

                                                                    <div class="area d-flex justify-content-between py-lg-3 py-2">
                                                                        <div class="satoshi-regular font20 leading32 res-font16 res-leading28_8 text-49484F text-capitalize">
                                                                            <?php echo esc_html($price_title); ?>
                                                                        </div>
                                                                        <div class="satoshi-regular font22 leading38_4 text-49484F res-font16 res-leading28_8">
                                                                            <?php echo esc_html($price_content); ?>
                                                                        </div>
                                                                    </div>

                                                                <?php endforeach; ?>

                                                            <?php endif; ?>

                                                        </div>

                                                    <?php endforeach; ?>

                                                <?php endif; ?>

                                            </div>

                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </section>

                <?php endif; ?>

            <?php endif; ?>

            <!-- END -->

        <?php elseif (get_row_layout() == 'treatment_card_section'):
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $card_group = get_sub_field('card_group');
            $card_select = get_sub_field('card_select');
        ?>
            <section class="treatments-cards-section">
                <div class="container">
                    <div class="row align-items-center justify-content-between dmb-90 tmb-55 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                        <div class="col-lg-4 col-8">
                            <?php if (!empty($title)): ?>
                                <div class="tk-ivypresto-display font60 leading61_8 res-font35 res-leading40_8 fw-lighter text-49484F tmb-25">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <?php if (!empty($description)): ?>
                                <div class="right-description satoshi-regular font14 leading22 text-666666 pe-lg-4">
                                    <?php echo $description; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row row36 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">

                        <?php if ($card_group == 'all'): ?>

                            <?php
                            $args = array(
                                'post_type'      => 'treatments',
                                'posts_per_page' => -1,
                                'post_parent'    => 0, // ONLY TOP LEVEL
                                'orderby'        => 'menu_order',
                                'order'          => 'ASC',
                            );

                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                            ?>

                                    <div class="col-lg-4 col-md-6 col-12 treatment-card dmb-110 tmb-45">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                            <div class="treatment-image dmb-25">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img class="w-100 h-100 object-cover radius3"
                                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                                        alt="<?php the_title_attribute(); ?>">
                                                <?php endif; ?>
                                            </div>

                                            <div class="treatment-content">
                                                <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                    <?php the_title(); ?>
                                                </div>

                                                <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                                </div>

                                                <div class="btnB link-btn satoshi-regular space1 font14 leading14 d-flex align-items-center transition">
                                                    Learn more
                                                    <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                        <img class="w-100"
                                                            src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                            alt="Arrow Icon">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                        <?php elseif ($card_group == 'select' && $card_select): ?>

                            <?php foreach ($card_select as $post): setup_postdata($post); ?>

                                <div class="col-4 treatment-card">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <div class="treatment-image dmb-25">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="w-100 h-100 object-cover radius3"
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </div>

                                        <div class="treatment-content">
                                            <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                <?php the_title(); ?>
                                            </div>

                                            <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                                            </div>

                                            <span class="btnB link-btn satoshi-regular font14 d-flex align-items-center transition">
                                                Learn more
                                                <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                    <img class="w-100"
                                                        src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                        alt="Arrow Icon">
                                                </div>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        <?php endif; ?>

                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'testimonial_section'):
            $testimonial_group = get_sub_field('testimonial_group');
        ?>

            <section class="testimonial-slider-section bg-F1DDD3 overflow-hidden">
                <div class="container">
                    <div class="testimonial-slider col-lg-7 col-12 dmb-125 tmb-60 wow animated animate__fadeInUp" data-wow-duration="1.5s">

                        <?php if (!empty($testimonial_group)):
                            foreach ($testimonial_group as $group):
                                $overview = $group['overview'];
                                $name = $group['name'];
                        ?>
                                <div class="testimonial d-lg-inline-flex">
                                    <div class="quote dmb-15">
                                        <img src="<?php echo get_template_directory_uri() ?>/templates/icons/quote.svg" alt="Quote Icon">
                                    </div>
                                    <div class="devider d-lg-block d-none"></div>
                                    <div class="content">
                                        <div class="tk-ivypresto-display font32 leading43 res-font25 res-leading32 fst-italic text-49484F dmb-30 tmb-25 pe-lg-3">
                                            <?php echo $overview; ?>
                                        </div>
                                        <div class="satoshi-regular font14 leading19_2 res-leading14 space1 text-49484F dmb-45"> <?php echo $name; ?></div>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>

                    </div>
                    <div class="slick-arrows-wrapper d-inline-flex align-items-center justify-content-center col-12 col-lg-2 gap-5 ps-lg-5">
                        <div class="prev-arrow cursor-pointer">
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                        </div>
                        <div class="next-arrow cursor-pointer">
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                        </div>
                    </div>

            </section>

        <?php elseif (get_row_layout() == 'logo_slider_section'):
            $slider_group = get_sub_field('slider_group');
        ?>
            <section class="logo-slider-section overflow-hidden">
                <div class="logo-slider-wrapper">
                    <?php if (!empty($slider_group)):
                        foreach ($slider_group as $image_grp):
                            $image = $image_grp['image'];
                    ?>
                            <div class="logo-item d-flex justify-content-center">
                                <img class="h-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'treatment_journey_section'):
            $main_title = get_sub_field('main_title');
            $journey_group = get_sub_field('journey_group');
            $link = get_sub_field('link');
        ?>
            <section class="treatment-journey-section bg-7E7C8B dpt-85 dpb-110 tpb-20">
                <div class="container">

                    <div class="row justify-content-center text-center wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                        <div class="col-lg-8">
                            <?php if (!empty($main_title)): ?>
                                <div class="tk-ivypresto-display font50 leading71_2 res-font35 res-leading40_2 fw-lighter text-capitalize text-white dmb-70 tmb-60">
                                    <?php echo $main_title; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="treatment-journey-block row wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if (!empty($journey_group)):
                            $i = 01;
                            foreach ($journey_group as $journey):
                                $title = $journey['title'];
                                $content = $journey['content'];
                        ?>
                                <div class="treatment-journey col-3 dmb-30 tmb-70">
                                    <div class="tk-ivypresto-display font32 leading28_8 fw-lighter text-center dpb-20 text-white text-capitalize pb-3">
                                        <em class="tk-ivypresto-display font32 leading28_8 fw-lighter text-center text-999999 d-inline-flex me-1"><?php echo  0 . $i; ?></em>
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="satoshi-regular text-center font14 leading19 text-white col-10 px-2 mx-auto">
                                        <?php echo $content; ?>

                                    </div>
                                </div>
                        <?php $i++;
                            endforeach;
                        endif; ?>
                    </div>
                    <?php if (!empty($link)): ?>
                        <div class="d-lg-flex d-none align-items-center justify-content-center dpt-90 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                            <a href="  <?php echo $link['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                <?php echo $link['title']; ?>
                                <div class="btn-arrow ms-2 transition">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Srrow Icon">
                                </div>
                            </a>
                        </div>

                    <?php endif; ?>
                </div>
            </section>


        <?php elseif (get_row_layout() == 'philosophy_section'):
            $main_title = get_sub_field('main_title');
            $philosophy_group = get_sub_field('philosophy_group');
        ?>
            <section class="philosophy-block-section bg-49484F dpt-90 dpb-170 tpt-75 tpb-80">
                <div class="container">

                    <?php if (!empty($main_title)): ?>
                        <div class="tk-ivypresto-display fw-lighter font60 leading61_8 res-font35 res-leading40_8 text-white text-center dpb-55                          tpb-60 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <?php echo $main_title; ?>
                        </div>
                    <?php endif; ?>

                    <div class="philosophy-cards row wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if (!empty($philosophy_group)):
                            foreach ($philosophy_group as $philosophy):
                                $title = $philosophy['title'];
                                $content = $philosophy['content'];
                                $image = $philosophy['image'];
                        ?>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="philosophy-card dpt-35 tpb-50">
                                        <?php if (!empty($image)): ?>
                                            <div class="philosophy-icon text-center dmb-20">
                                                <img class="h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="tk-ivypresto-display fw-lighter font32 leading28_8 text-white text-center dmb-20">
                                            <?php echo $title; ?>
                                        </div>
                                        <div class="satoshi-regular font14 leading19 text-white text-center mx-auto col-10">
                                            <?php echo $content; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'sub_hero_section'):
            $media_select = get_sub_field('media_select');
            $image = get_sub_field('image');
            $video = get_sub_field('video');
            $sub_title = get_sub_field('sub_title');
            $sub_hero_description = get_sub_field('sub_hero_description');
        ?>

            <section class="sub-hero-section position-relative h-vh overflow-hidden">

                <div class="sub-hero-wrapper position-relative h-100">
                    <div class="sub-hero-layer position-absolute top-0 start-0 w-100 h-100"></div>
                    <?php if ($media_select == 'image'): ?>
                        <img class="w-100 h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['titile']; ?>">
                    <?php endif; ?>
                    <?php if ($media_select == 'video'): ?>
                        <video class="w-100 h-100" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                            src="assets/video/video2.mp4" data-object-fit="cover"></video>
                    <?php endif; ?>

                </div>
                <div class="hero-content position-absolute bottom-0 dmb-60 tmb-40 w-100 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="container">
                        <div class="col-lg-7 ">
                            <div class="tk-ivypresto-display fw-lighter font60 leading44_2 res-font30 res-leading34_2 text-white dmb-20 tmb-10">
                                <?php echo $sub_title; ?>
                            </div>
                            <div class="satoshi-regular font16 leading22 res-font14 text-white dmb-15 tmb-0">
                                <?php echo $sub_hero_description; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'contact_section'):
            $contact_title = get_sub_field('contact_title');
            $information_content = get_sub_field('information_content');
        ?>

            <section class="contact-us-section bg-49484F">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-6 tmb-60">
                            <?php if (!empty($contact_title)): ?>
                                <div class="tk-ivypresto-display fw-lighter font62 leading28_8 res-font35 res-leading28_8 text-white dmb-70 tmb-45">
                                    <?php echo $contact_title; ?>
                                </div>
                            <?php endif; ?>
                            <?php echo do_shortcode('[contact-form-7 id="007b968" title="Contact form 1"]') ?>
                        </div>
                        <?php if (!empty($information_content)): ?>
                            <div class="col-lg-5 offset-lg-1">

                                <div class="contact-info-card bg-FFFFFF0A radius3 px-lg-5 px-4 dpt-50 dpb-95 tpb-50">

                                    <div class="tk-ivypresto-display fw-lighter font32 leading28_8 text-capitalize text-white dmb-30">
                                        Clinic Information
                                    </div>
                                    <?php if (!empty($information_content['address'])): ?>
                                        <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Address</div>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2 col-lg-6">
                                            <?php echo $information_content['address']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['link_text'])): ?>
                                        <div class="link-text satoshi-regular font14 leading22 text-white dmt-30">
                                            <?php echo $information_content['link_text']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['link'])): ?>
                                        <a href="<?php echo $information_content['link']['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition dmt-30">
                                            <?php echo $information_content['link']['title'] ?>
                                            <div class="btn-arrow ms-2 transition">
                                                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['contact_no'])): ?>
                                        <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Contact</div>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                            Phone:
                                            <a href="tel:<?php echo $information_content['contact_no']; ?>" class="satoshi-regular font14 leading22 text-FFFFFFB2 text-decoration-none">
                                                <?php echo $information_content['contact_no']; ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['email'])): ?>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                            Email:
                                            <a class="satoshi-regular font14 leading22 text-FFFFFFB2 text-decoration-none" href="mailto:<?php echo $information_content['email']; ?>">
                                                <?php echo $information_content['email']; ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['clinic_hours'])): ?>
                                        <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Clinic Hours</div>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                            <?php echo $information_content['clinic_hours']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['other_information'])): ?>
                                        <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Parking</div>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                            <?php echo $information_content['other_information']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <?php if (get_row_layout() == 'spacing'):
            $background_color = get_sub_field('background_color');
            $desktop = get_sub_field('desktop');
            $tablet = get_sub_field('tablet');
            $mobile = get_sub_field('mobile');
            $desktop_mb = $desktop['margin_bottom'];
            $desktop_mb_main = !empty($desktop['margin_bottom']) ? " dpb-" : "";
            $tablet_mb = $tablet['margin_bottom'];
            $tablet_mb_main = !empty($tablet['margin_bottom']) ? " tpb-" : "";
            $mobile_mb = $mobile['margin_bottom'];
            $mobile_mb_main = !empty($mobile['margin_bottom']) ? " mpb-" : "";
        ?>
            <div class="spacing<?php
                                echo $desktop_mb_main;
                                echo $desktop_mb;
                                echo $tablet_mb_main;
                                echo $tablet_mb;
                                echo $mobile_mb_main;
                                echo $mobile_mb;
                                echo '';
                                if ($background_color == 'bg-F1DDD3') {
                                    echo ' bg-F1DDD3';
                                } elseif ($background_color == 'bg-49484F') {
                                    echo ' bg-49484F';
                                }

                                ?>  "></div>
        <?php endif; ?>
<?php
    endwhile;
endif; ?>