<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('font-awesome', 'simple-line-icons', 'magnific-popup', 'slick', 'oceanwp-style', 'oceanwp-woocommerce', 'oceanwp-woo-star-font', 'oceanwp-woo-quick-view'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// redirect single posts to the archive page, scrolled to current ID 
add_action('template_redirect', function () {
    if (is_singular('event')) {
        global $post;
        $redirect_link = get_post_type_archive_link('event') . "#event" . $post->ID;
        wp_safe_redirect($redirect_link, 302);
        exit;
    }
});

// END ENQUEUE PARENT ACTION
