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
                <div class="hero-slider position-relative h-100">
                    <?php if ($media_type == 'image' && !empty($image)): ?>
                        <img class="w-100 h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    <?php endif; ?>
                    <!-- video -->
                    <?php if ($media_type == 'video' && !empty($video)): ?>
                        <video class="w-100 h-100 object-cover" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                            src="<?php echo $video['url']; ?>" data-object-fit="cover"></video>
                    <?php endif; ?>

                    <!-- youtube -->
                    <iframe class="w-100 h-100 object-cover"
                        src="https://www.youtube.com/embed/<?php echo esc_attr($youtube); ?>"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                    <!-- vimeo -->

                    <?php if ($media_type == 'vimeo' && !empty($vimeo)) : ?>
                        <iframe class="w-100 h-100 object-cover"
                            src="<?php echo $vimeo; ?>?autoplay=1&loop=1&background=1&controls=0&rel=0&mute=1"
                            allow="autoplay" allowfullscreen>
                        </iframe>
                    <?php endif; ?>
                </div>
                <div class="hero-content position-absolute bottom-0 dmb-60 w-100">
                    <div class="container">
                        <div class="col-7">
                            <div class="tk-ivypresto-display fw-lighter font70 leading71_8 text-white dmb-20">
                                <?php if (!empty($hero_title)): ?>
                                    <?php echo $hero_title; ?>
                                <?php endif; ?>
                            </div>
                            <div class="satoshi-regular font18 leading27 text-white dmb-15">
                                <?php if (!empty($hero_description)): ?>
                                    <?php echo $hero_description; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($hero_link)): ?>
                                <div class="">
                                    <a class="btnA bg-AF9064-btn satoshi-regular font14 space1 d-inline-flex justify-content-center align-items-center text-decoration-none transition"
                                        href="<?php echo $hero_link['url']; ?>">
                                        <?php echo $hero_link['title']; ?>
                                        <div class="btn-arrow ms-2 transition">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
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
                    <div class="col-11 mx-auto">
                        <div class="row align-items-center">
                            <?php if ($media_select == 'image' && $media_direction == 'left'): ?>
                                <div class="col-lg-4">
                                    <div class="left-image">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($media_select == 'video' && $media_direction == 'left'): ?>
                                <div class="col-lg-5 ms-4 me-auto left-image radius3 overflow-hidden">
                                    <video class="w-100 h-100 object-cover" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                                        src="<?php echo $video['url']; ?>" data-object-fit="cover"></video>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-6 pe-5">
                                <?php if (!empty($title)): ?>
                                    <div class="tk-ivypresto-display font42 leading44_2 fw-lighter text-494850 dmb-20">
                                        <?php echo $title; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($title)): ?>
                                    <div class="satoshi-regular col-11 font14 leading22text-494850 dmb-20">
                                        <?php echo $description; ?> </div>
                                <?php endif; ?>
                                <?php if (!empty($link)): ?>
                                    <a href="<?php echo $link['url']; ?>" class="btnA border-494850-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                        <?php echo $link['title']; ?>
                                        <div class="btn-arrow ms-2 transition">
                                            <img class="w-100 " src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
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
                    <div class="row justify-content-between align-items-center">
                        <?php if ($media_direction == 'left'): ?>
                            <div class="col-lg-5 pe-2 left-right-image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 h-100 object-cover radius3">
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6 pe-1">
                            <?php if (!empty($title)): ?>
                                <div class="left-right-title col-9 tk-ivypresto-display font42 leading44_2 fw-lighter text-494850 dmb-20">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($description)): ?>
                                <div class="left-right-description satoshi-regular font14 leading22text-494850 dmb-20">
                                    <?php echo $description; ?> </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($media_direction == 'right'): ?>
                            <div class="col-lg-5 ps-2 left-right-image">
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

            <section class="faq-section dark-bg-faq bg-7E7C8B dpt-95 dpb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <?php if (!empty($left_content['title'])): ?>
                                <div class="tk-ivypresto-display font42 leading44_2 text-white fw-lighter dpb-25">
                                    <?php echo $left_content['title']; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($left_content['title'])): ?>
                                <div class="satoshi-regular font14 leading22 text-white dpb-25">
                                    <?php echo $left_content['content']; ?>
                                </div>
                            <?php endif; ?>

                            <a href="<?php echo $left_content['link']['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                <?php echo $left_content['link']['title']; ?>
                                <div class="btn-arrow ms-2 transition">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-8 offset-1">
                            <div class="category-faq">
                                <?php if (!empty($right_content)):
                                    foreach ($right_content as $contents):
                                        $title = $contents['title'];
                                        $content = $contents['content'];
                                ?>
                                        <div class="closet-item white-border bg-268a85">
                                            <div class="closet-header d-flex align-items-center cursor-pointer justify-content-between dpb-35 dpt-30">
                                                <div class="satoshi-regular font20 leading32 text-white"><?php echo $title; ?></div>
                                                <div class="icon-bg d-flex justify-content-center align-items-center"><img class="transition" src="assets/images/accordion-plus.svg" alt=""></div>
                                            </div>
                                            <div class="closet-content dpb-75">
                                                <div class="satoshi-light font16 leading25_6 text-white pb-4">
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

            <section class="sticky-content-section h-100">

                <div class="row">
                    <?php if (!empty($left_content)): ?>

                        <div class="col-lg-6">
                            <div class="left-content position-relative bg-49484F dpt-135 dpb-135">

                                <div class="image-wrapper col-5 mx-auto mx-auto">
                                    <div class="image-layer position-absolute top-0 start-0 w-100 h-100"></div>
                                    <img src="<?php echo $left_content['image']['url']; ?>" class="w-100 h-100 object-cover" alt="<?php echo $left_content['image']['title']; ?>">
                                    <div class="text-wrapper w-100 position-absolute top-left-center">
                                        <div class="tk-ivypresto-display fw-lighter font60 leading61_8 text-white text-center col-7 mx-auto">
                                            <?php echo $left_content['title']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-6 bg-7E7C8B">
                        <div class="right-scroll-content position-relative">
                            <div class="inner-content-layer position-absolute bottom-0 start-0 w-100"></div>
                            <div class="inner-content position-sticky overflow-y-auto">
                                <?php if (!empty($right_content)):
                                    foreach ($right_content as $contents):
                                        $image = $contents['image'];
                                        $title = $contents['title'];
                                        $description = $contents['description'];
                                ?>

                                        <div class="content-item col-8 mx-auto dpt-105 dpb-130 ">
                                            <div class="content-img text-center">
                                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                                            </div>
                                            <div
                                                class="content-title tk-ivypresto-display fw-lighter font32 leading28_8 text-white dpt-30 text-center">
                                                <?php echo $title; ?>
                                            </div>
                                            <div class="content-desc satoshi-regular font14 leading19 text-white dpt-20 text-center px-3">
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

                    <div class="row">
                        <div class="col-lg-6">
                            <?php if (!empty($title)) : ?>
                                <div class="tk-ivypresto-display font41 leading44_2 fw-lighter text-494850 dmb-50">
                                    <?php echo esc_html($title); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center justify-content-end">
                            <div class="slick-arrows-wrapper d-flex align-items-center justify-content-center pe-4">
                                <div class="prev-arrow cursor-pointer me-3">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="">
                                </div>
                                <div class="next-arrow cursor-pointer">
                                    <img class=" w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="">
                                </div>
                            </div>
                            <?php if (!empty($link)): ?>
                                <a href="<?php echo $link['url']; ?>" class="btnA bg-AF9064-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                    <?php echo $link['title']; ?>
                                    <div class="btn-arrow ms-2 transition">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="explore-treatment-slider">

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
                                                <div class="treatment-image">
                                                    <?php the_post_thumbnail('medium', [
                                                        'class' => 'w-100 h-100 object-cover radius3'
                                                    ]); ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="treatment-content pt-4">
                                                <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                    <?php the_title(); ?>
                                                </div>

                                                <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                                </div>

                                                <div class="btnB link-btn satoshi-regular font14 leading14 d-flex align-items-center transition">
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
                                            <div class="treatment-image">
                                                <?php the_post_thumbnail('medium', [
                                                    'class' => 'w-100 h-100 object-cover radius3'
                                                ]); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="treatment-content pt-4">
                                            <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                <?php the_title(); ?>
                                            </div>

                                            <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                                            </div>

                                            <div class="btnB link-btn satoshi-regular font14 leading14 d-flex align-items-center transition">
                                                Learn more
                                                <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                    <img class="w-100"
                                                        src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        <?php endif; ?>

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
                    <div class="tk-ivypresto-display fw-lighter font41 leading44_2 text-494850 dpb-25"><?php echo $main_title; ?></div>
                    <?php if ($qualitifications_group): ?>
                        <?php foreach ($qualitifications_group as $qualitifications):
                            $degree_name     = $qualitifications['degree_name'];
                            $university_name  = $qualitifications['university_name'];
                            $year             = $qualitifications['year'];
                        ?>
                            <div class="row dark-border dpt-20 dpb-25">
                                <div class="col-lg-5">
                                    <div class="satoshi-regular font16 leading25_6 text-black"><?php echo $degree_name; ?></div>
                                </div>
                                <div class="col-lg-3 offset-1">
                                    <div class="satoshi-light font16 leading25_6 text-black"><?php echo $university_name; ?></div>
                                </div>
                                <div class="col-lg-3 text-end">
                                    <div class="satoshi-light font16 leading25_6 text-black"><?php echo $year; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="row dark-border dpt-20 dpb-25">
                        <div class="col-lg-5">
                            <div class="satoshi-regular font16 leading25_6 text-black">
                                <?php echo $other_content; ?>
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
                    <div class="col-5 mx-auto">
                        <?php if (!empty(($title))): ?>
                            <div class="tk-ivypresto-display fw-lighter font60 leading61_8 text-49484F text-center dmb-20">
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

            <?php elseif (get_row_layout() == 'treatment_filter_section') :

            $filter_selection = get_sub_field('filter_selection');

            if (!empty($filter_selection) && is_array($filter_selection)) :
            ?>
                <div class="sticky-bar-section bg-49484F73 position-fixed bottom-0 z-3 w-100">
                    <div class="container">
                        <div class="sticky-bar-wraper d-flex align-items-center justify-content-center gap-3">

                            <?php
                            $i = 0;

                            foreach ($filter_selection as $item) :

                                $post_id = is_object($item) ? $item->ID : $item;

                                if (!$post_id) continue;
                            ?>

                                <div class="item d-inline-flex align-items-center px-2">
                                    <button
                                        class="satoshi-regular border-0 bg-transparent font14 leading22_4 text-F1DDD3 text-decoration-none faq-trigger"
                                        data-index="<?php echo esc_attr($i); ?>">
                                        <?php echo esc_html(get_the_title($post_id)); ?>
                                    </button>
                                </div>

                            <?php
                                $i++;
                            endforeach;
                            ?>

                        </div>
                    </div>
                </div>
                <section class="image-faq-section">
                    <div class="container">
                        <div class="col-10 mx-auto">
                            <div class="image-faq">

                                <?php
                                $i = 0;

                                foreach ($filter_selection as $item) :

                                    $post_id = is_object($item) ? $item->ID : $item;

                                    if (!$post_id) continue;

                                    $image = get_the_post_thumbnail_url($post_id, 'large');
                                    $content = get_post_field('post_content', $post_id);

                                    $standard_areas = get_field('treatment_standard_area', $post_id);
                                ?>

                                    <div class="closet-item position-relative dmb-20" data-index="<?php echo esc_attr($i); ?>">
                                        <div class="closet-header d-flex align-items-center cursor-pointer justify-content-between">
                                            <div class="closet-header-title tk-ivypresto-display fw-lighter font32 leading28_8 text-black">
                                                <?php echo esc_html(get_the_title($post_id)); ?>
                                            </div>
                                            <div class="icon-bg d-flex justify-content-center align-items-center">
                                                <img class="transition"
                                                    src="<?php echo get_template_directory_uri(); ?>/templates/icons/accordion-plus.svg"
                                                    alt="Accordion Icon">
                                            </div>
                                        </div>

                                        <div class="closet-content dpb-230 hero-style-content bg-000000A">
                                            <?php if ($image) : ?>
                                                <div class="image-faq-hero position-relative overflow-hidden">
                                                    <div class="image-faq-hero-layer position-absolute top-0 start-0 w-100 h-100"></div>

                                                    <div class="faq-img">
                                                        <img src="<?php echo esc_url($image); ?>"
                                                            alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                                            class="w-100 h-100 object-cover">
                                                    </div>

                                                    <div class="image-faq-hero-content position-absolute bottom-0 dmb-60 w-100 px-5">
                                                        <div class="col-8 pe-3">
                                                            <div class="tk-ivypresto-display fw-lighter font32 leading28_8 text-white dmb-25">
                                                                <?php echo esc_html(get_the_title($post_id)); ?>
                                                            </div>
                                                            <div class="satoshi-regular font14 leading22 text-white">
                                                                <?php echo wp_kses_post($content); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (!empty($standard_areas)): ?>

                                                <?php foreach ($standard_areas as $area) :

                                                    $title       = $area['title'] ?? '';
                                                    $content = $area['content'] ?? '';
                                                    $price_group = $area['price_group'] ?? [];
                                                ?>

                                                    <div class="image-faq-areas dpt-90 dpb-30 mx-5">

                                                        <?php if ($title) : ?>
                                                            <div class="tk-ivypresto-display fw-lighter font26 leading25_6 text-49484F pb-1">
                                                                <?php echo esc_html($title); ?>
                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if ($content) : ?>
                                                            <div class="satoshi-regular font14 leading22 text-666666">
                                                                <?php echo esc_html($content); ?>
                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if (!empty($price_group)) : ?>

                                                            <?php foreach ($price_group as $price) :

                                                                $price_title   = $price['title'] ?? '';
                                                                $price_content = $price['content'] ?? '';
                                                            ?>

                                                                <div class="area d-flex align-items-center justify-content-between">
                                                                    <div class="satoshi-regular font20 leading32 text-49484F text-capitalize"><?php echo esc_html($price_title); ?></div>
                                                                    <div class="satoshi-regular font22 leading38_4 text-49484F"><?php echo esc_html($price_content); ?></div>
                                                                </div>

                                                            <?php endforeach; ?>

                                                        <?php endif; ?>

                                                    </div>

                                                <?php endforeach; ?>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                <?php
                                    $i++;
                                endforeach;
                                ?>

                            </div>
                        </div>
                    </div>
                </section>

            <?php
            endif;
            ?>

        <?php elseif (get_row_layout() == 'treatment_card_section'):
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $card_group = get_sub_field('card_group');
            $card_select = get_sub_field('card_select');
        ?>
            <section class="treatments-cards-section">
                <div class="container">
                    <div class="row align-items-center justify-content-between dmb-90">
                        <div class="col-lg-5">
                            <?php if (!empty($title)): ?>
                                <div class="tk-ivypresto-display font60 leading61_8 fw-lighter text-49484F">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-5 offset-1">
                            <?php if (!empty($description)): ?>
                                <div class="right-description satoshi-regular font14 leading22 text-666666 pe-4">
                                    <?php echo $description; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row row36">

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

                                    <div class="col-4 treatment-card dmb-110">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                            <div class="treatment-image">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img class="w-100 h-100 object-cover radius3"
                                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                                        alt="<?php the_title_attribute(); ?>">
                                                <?php endif; ?>
                                            </div>

                                            <div class="treatment-content pt-4">
                                                <div class="treatment-title tk-ivypresto-display font26 leading25_6 text-49484F fw-light mb-2">
                                                    <?php the_title(); ?>
                                                </div>

                                                <div class="treatment-description satoshi-regular font14 leading19 text-49484F mb-3">
                                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                                </div>

                                                <div class="btnB link-btn satoshi-regular font14 leading14 d-flex align-items-center transition">
                                                    Learn more
                                                    <div class="btn-arrow d-flex align-items-center ms-2 transition">
                                                        <img class="w-100"
                                                            src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg"
                                                            alt="">
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
                                        <div class="treatment-image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="w-100 h-100 object-cover radius3"
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </div>

                                        <div class="treatment-content pt-4">
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
                                                        alt="">
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
                    <div class="testimonial-slider col-7">

                        <?php if (!empty($testimonial_group)):
                            foreach ($testimonial_group as $group):
                                $overview = $group['overview'];
                                $name = $group['name'];
                        ?>
                                <div class="testimonial d-inline-flex">
                                    <div class="quote">
                                        <img src="<?php echo get_template_directory_uri() ?>/templates/icons/quote.svg" alt="Quote Icon">
                                    </div>
                                    <div class="devider"></div>
                                    <div class="content">
                                        <div class="tk-ivypresto-display font32 leading43 fst-italic text-49484F dmb-40 pe-3">
                                            <?php echo $overview; ?>
                                        </div>
                                        <div class="satoshi-regular fornt14 leading19_2 space1 text-49484F dpb-45"> <?php echo $name; ?></div>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>

                    </div>
                    <div class="slick-arrows-wrapper d-inline-flex align-items-center gap-5 ps-5 dmt-160">
                        <div class="prev-arrow cursor-pointer">
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="">
                        </div>
                        <div class="next-arrow cursor-pointer">
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="">
                        </div>
                    </div>

            </section>

        <?php elseif (get_row_layout() == 'logo_slider_section'):
            $slider_group = get_sub_field('slider_group');
        ?>
            <section class="logo-slider-section">
                <div class="logo-slider-wrapper">
                    <?php if (!empty($slider_group)):
                        foreach ($slider_group as $image_grp):
                            $image = $image_grp['image'];
                    ?>
                            <div class="logo-item">
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
            <section class="treatment-journey-section bg-7E7C8B dpt-85 dpb-110">
                <div class="container">

                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <?php if (!empty($main_title)): ?>
                                <div class="tk-ivypresto-display font50 leading71_2 fw-lighter text-capitalize text-white">
                                    <?php echo $main_title; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="treatment-journey-slider dpt-70">
                        <?php if (!empty($journey_group)):
                            $i = 01;
                            foreach ($journey_group as $journey):
                                $title = $journey['title'];
                                $content = $journey['content'];
                        ?>
                                <div class="treatment-journey">
                                    <div class="tk-ivypresto-display font32 leading28_8 fw-lighter text-center dpb-20 text-white text-capitalize pb-3">
                                        <em class="tk-ivypresto-display font32 leading28_8 fw-lighter text-center text-999999 d-inline-flex  me-1"><?php echo  0 . $i; ?></em>
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="satoshi-regular text-center font14 leading19 text-white">
                                        <?php echo $content; ?>

                                    </div>
                                </div>
                        <?php $i++;
                            endforeach;
                        endif; ?>
                    </div>
                    <?php if (!empty($link)): ?>
                        <div class="d-flex align-items-center justify-content-center dpt-90">
                            <a href="  <?php echo $link['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                                <?php echo $link['title']; ?>
                                <div class="btn-arrow ms-2 transition">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
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
            <section class="philosophy-block-section bg-49484F dpt-90 dpb-170">
                <div class="container">

                    <?php if (!empty($main_title)): ?>
                        <div class="tk-ivypresto-display fw-lighter font60 leading61_8 text-white text-center dpb-90">
                            <?php echo $main_title; ?>
                        </div>
                    <?php endif; ?>

                    <div class="philosophy-cards d-flex align-items-center justify-content-around">
                        <?php if (!empty($philosophy_group)):
                            foreach ($philosophy_group as $philosophy):
                                $title = $philosophy['title'];
                                $content = $philosophy['content'];
                                $image = $philosophy['image'];
                        ?>

                                <div class="philosophy-card">
                                    <?php if (!empty($image)): ?>
                                        <div class="philosophy-icon text-center">
                                            <img class="h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="tk-ivypresto-display fw-lighter font32 leading28_8 text-white text-center dpt-20">
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="psatoshi-regular font14 leading19 text-white text-center dpt-20 mx-auto col-10">
                                        <?php echo $content; ?>
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
                    <div class="hero-layer position-absolute top-0 start-0 w-100 h-100"></div>
                    <?php if ($media_select == 'image'): ?>
                        <img class="w-100 h-100 object-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['titile']; ?>">
                    <?php endif; ?>
                    <?php if ($media_select == 'video'): ?>
                        <video class="w-100 h-100" autoplay loop muted playsinline data-wf-ignore="true" preload="none"
                            src="assets/video/video2.mp4" data-object-fit="cover"></video>
                    <?php endif; ?>

                </div>
                <div class="hero-content position-absolute bottom-0 dmb-60 w-100">
                    <div class="container">
                        <div class="col-7">
                            <div class="tk-ivypresto-display fw-lighter font70 leading71_8 text-white dmb-20">
                                <?php echo $sub_title; ?>
                            </div>
                            <div class="satoshi-regular font18 leading27 text-white dmb-15">
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
                        <div class="col-lg-6">
                            <?php if (!empty($contact_title)): ?>
                                <div class="tk-ivypresto-display fw-lighter font62 leading28_8 text-white dpb-70">
                                    <?php echo $contact_title; ?>
                                </div>
                            <?php endif; ?>
                            <?php echo do_shortcode('[contact-form-7 id="007b968" title="Contact form 1"]') ?>
                        </div>
                        <?php if (!empty($information_content)): ?>
                            <div class="col-lg-5 offset-lg-1">

                                <div class="contact-info-card bg-FFFFFF0A radius3 px-5 dpt-50 dpb-95">

                                    <div class="tk-ivypresto-display fw-lighter font32 leading28_8 text-white dmb-30">
                                        Clinic Information
                                    </div>
                                    <?php if (!empty($information_content['address'])): ?>
                                        <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Address</div>
                                        <div class="satoshi-regular font14 leading22 text-FFFFFFB2 col-6">
                                            <?php echo $information_content['address']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($information_content['link_text'])): ?>
                                        <div class="satoshi-regular font14 leading22 text-white dmt-30">
                                            <?php echo $information_content['link_text']; ?>
                                        </div>
                                    <?php endif; ?>

                                    <a href="<?php echo $information_content['link']['url']; ?>" class="btnA white-border-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition dmt-30">
                                        <?php echo $information_content['link']['title'] ?>
                                        <div class="btn-arrow ms-2 transition">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="">
                                        </div>
                                    </a>

                                    <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Contact</div>
                                    <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                        Phone:
                                        <a href="tel:<?php echo $information_content['contact_no']; ?>" class="satoshi-regular font14 leading22 text-FFFFFFB2 text-decoration-none">
                                            <?php echo $information_content['contact_no']; ?>
                                        </a>
                                    </div>
                                    <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                        Email:
                                        <a class="satoshi-regular font14 leading22 text-FFFFFFB2 text-decoration-none" href="mailto:<?php echo $information_content['email']; ?>">
                                            <?php echo $information_content['email']; ?>
                                        </a>
                                    </div>

                                    <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Clinic Hours</div>
                                    <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                        <?php echo $information_content['clinic_hours']; ?>
                                    </div>
                                    <div class="satoshi-regular font20 leading32 text-white dmt-30 dmb-10">Parking</div>
                                    <div class="satoshi-regular font14 leading22 text-FFFFFFB2">
                                        <?php echo $information_content['other_information']; ?>
                                    </div>
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