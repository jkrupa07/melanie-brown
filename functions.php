<?php
$curious_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

foreach ($curious_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title' => 'Header',
      'menu_title' => 'Header',
      'menu_slug' => 'header-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
  acf_add_options_page(
    array(
      'page_title' => 'Footer',
      'menu_title' => 'Footer',
      'menu_slug' => 'footer-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
  acf_add_options_page(
    array(
      'page_title' => 'Theme setting',
      'menu_title' => 'Theme setting',
      'menu_slug' => 'theme-setting',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
}

add_filter('wpcf7_autop_or_not', '__return_false');

add_image_size('gallery-thumb', 400, 0, true);
add_image_size('medium', 1200, 0, true);
add_image_size('fullscreen', 2700, 0, true);

function create_treatment_cpt()
{
  register_post_type('treatments', array(
    'labels' => array(
      'name' => 'Treatments',
      'singular_name' => 'Treatment'
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'treatments',
      'with_front' => false
    ),
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
  ));
}
add_action('init', 'create_treatment_cpt');
function create_sub_treatment_cpt()
{
  register_post_type('sub_treatments', array(
    'labels' => array(
      'name' => 'Sub Treatments',
      'singular_name' => 'Sub Treatment'
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'sub_treatments',
      'with_front' => false
    ),
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
  ));
}

add_action('init', 'create_sub_treatment_cpt');

function melanie_enqueue_flatpickr() {

    wp_enqueue_style(
        'flatpickr-css',
        get_stylesheet_directory_uri() . '/assets/css/flatpickr.min.css',
        array(),
        '4.6.13'
    );

    wp_enqueue_script(
        'flatpickr-js',
        get_stylesheet_directory_uri() . '/assets/js/flatpickr.min.js',
        array(),
        '4.6.13',
        true
    );

    wp_add_inline_script('flatpickr-js', "
        function initDatePicker() {
            if (document.querySelector('.date-picker')) {
                flatpickr('.date-picker', {
                    dateFormat: 'Y-m-d',
                    minDate: 'today'
                });
            }
        }

        document.addEventListener('DOMContentLoaded', initDatePicker);
        document.addEventListener('wpcf7mailsent', initDatePicker);
        document.addEventListener('wpcf7invalid', initDatePicker);
    ");
}
add_action('wp_enqueue_scripts', 'melanie_enqueue_flatpickr');