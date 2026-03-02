<?php
$header_color = get_field('header_color');
$header_logo = get_field('header_logo', 'option');
$header_dark_logo = get_field('header_dark_logo', 'option');
$header_links = get_field('header_links', 'option');
$header_button = get_field('header_button', 'option');
?>
<header class="header <?php echo ($header_color == 'dark' ? 'black-header' : ''); ?> position-fixed top-0 w-100 transition">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <?php if (!empty($header_logo)): ?>
                    <div class="col-2 header-logo">
                        <div class="white-logo d-block">
                            <a href="<?php echo get_home_url(); ?>">
                                <img class="w-100" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>">
                            </a>
                        </div>
                        <div class="black-logo d-none">
                            <a href="<?php echo get_home_url(); ?>">
                                <img class="w-100" src="<?php echo $header_dark_logo['url']; ?>" alt="<?php echo $header_dark_logo['title']; ?>">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <nav class="col-xl-8 col-lg-6 navigation d-none d-lg-flex justify-content-end">
                    <ul class="list-none d-block d-lg-flex justify-content-end align-items-center ps-0 mb-0">
                        <?php if (!empty($header_links)):
                            foreach ($header_links as $links):
                                $link = $links['link'];
                        ?>
                                <li class="tmb-35">
                                    <a class="header-link satoshi-regular font14 leading22_4 text-white space1 res-font24 res-leading34_4 text-decoration-none py-2 transition"
                                        href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                </li>
                        <?php endforeach;
                        endif; ?>

                        <?php if (!empty($header_button)): ?>
                            <div class="col header-btn d-inline-flex d-lg-none justify-content-end">

                                <a class="header-link btnA border-49484F-btn satoshi-regular font14 space1 d-inline-flex justify-content-center align-items-center text-decoration-none transition"
                                    href="<?php echo $header_button['url']; ?>"><?php echo $header_button['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </ul>

                </nav>
                <div class="menu-toggle col-3 position-relative d-lg-none d-flex justify-content-end">
                    <div class="burger-menu d-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/templates/icons/white-burger-menu.svg" alt="Burger-menu">
                    </div>
                    <div class="close-menu d-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/templates/icons/black-closebar.svg" alt="Burger-menu">
                    </div>
                </div>
                <?php if (!empty($header_button)): ?>
                    <div class="col header-btn d-none d-lg-flex justify-content-end">
                        <a class="header-link btnA white-border-btn satoshi-regular font14 space1 d-inline-flex justify-content-center align-items-center text-decoration-none transition"
                            href="<?php echo $header_button['url']; ?>"><?php echo $header_button['title']; ?></a>

                        <a class="header-link btnA d-none border-49484F-btn satoshi-regular font14 space1 d-inline-flex justify-content-center align-items-center text-decoration-none transition"
                            href="<?php echo $header_button['url']; ?>"><?php echo $header_button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</header>