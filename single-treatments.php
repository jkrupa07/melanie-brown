<?php
$select_sub_treatment = get_field("select_sub_treatment");
$category_left_content = get_field('category_left_content');
?>


<section class="category-hero-section position-relative">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="Hero image" class="w-100 h-100 object-cover">

    <div class="hero-content position-absolute bottom-0 dmb-65 tmb-30 w-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <div class="tk-ivypresto-display fw-lighter font70 leading71_8 res-font30 res-leading40_8 text-white text-capitalize dmb-20 tmb-10">
                        <?php echo get_the_title(); ?>
                    </div>
                    <div class="satoshi-regular font18 leading27 res-font14 res-leading22 tmb-25 text-white">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-end justify-content-lg-end">
                    <a href="#" class="btnB link-btn satoshi-regular font14 space1 res-font12 text-white d-flex align-items-end text-decoration-none transition">
                        <div class="btn-arrow pe-2">
                            <img class="prev-arrow w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-arrow.svg" alt="Arrow Icon">
                        </div>
                        Back to treatments
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="spacing dpt-150 tpt-80"></div>
<?php if (!empty($category_left_content)): ?>
    <section class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 tmb-70">
                    <?php if (!empty($category_left_content['title'])): ?>
                        <div class="col-lg-12 col-10 tk-ivypresto-display font42 leading44_2 res-font35 res-leading40_2 text-494850 fw-lighter dmb-25 tmb-15">
                            <?php echo $category_left_content['title']; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($category_left_content['content'])): ?>
                        <div class="satoshi-regular font14 leading22 text-494850 dmb-25 tmb-30">
                            <?php echo $category_left_content['content']; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($category_left_content['link'])): ?>
                        <a href="<?php echo $category_left_content['link']['url']; ?>"
                            class="btnA border-494850-btn satoshi-regular font14 d-inline-flex justify-content-center align-items-center text-decoration-none transition">
                            <?php echo $category_left_content['link']['title']; ?>
                            <div class="btn-arrow">
                                <img class="w-100 ms-2" src="<?php echo get_template_directory_uri(); ?>/templates/icons/gray-arrow.svg" alt="Arrow Icon">
                            </div>
                        </a>
                    <?php endif; ?>
                </div>


                <div class="col-lg-8 ms-auto">
                    <?php foreach ($select_sub_treatment as $post_object):
                        $post_id = $post_object->ID;
                    ?>

                        <div class="category-item row align-items-center justify-content-center ps-lg-3">
                            <div class="col-md-3 tmb-20">
                                <div class="category-image radius3 overflow-hidden">
                                    <?php echo get_the_post_thumbnail($post_id, 'large', [
                                        'class' => 'w-100 h-100 object-cover'
                                    ]); ?>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="category-content ps-md-4">
                                    <div class="satoshi-regular font20 leading32 text-black dmb-5">
                                        <?php echo esc_html($post_object->post_title); ?>
                                    </div>
                                    <div class="satoshi-light font16 leading25_6 res-font14 res-leading22_4 text-black dmb-20">
                                        <?php
                                        echo apply_filters(
                                            'the_content',
                                            $post_object->post_content
                                        );
                                        ?>
                                    </div>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="btnB link-btn satoshi-regular font14 space1 text-494850 d-flex text-decoration-none transition">
                                        Learn more
                                        <div class="btn-arrow ms-2 transition">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/templates/icons/dark-btn-arrow.svg" alt="Arrow Icon">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
<?php endif; ?>

<div class="spacing dpt-160 tpt-120"></div>