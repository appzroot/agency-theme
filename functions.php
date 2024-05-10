<?php

/**
 * Agency Styles & Scripts
 */

function agency_styles_and_scripts()
{

    /** CSS */ 

    wp_enqueue_style("agency_bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "5.0.0", "all");
    wp_enqueue_style("agency_custom_style", get_template_directory_uri() . "/assets/css/style.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_animate", get_template_directory_uri() . "/assets/lib/animate/animate.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_animate_min", get_template_directory_uri() . "/assets/lib/animate/animate.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_lightbox", get_template_directory_uri() . "/assets/lib/lightbox/css/lightbox.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_lightbox_min", get_template_directory_uri() . "/assets/lib/lightbox/css/lightbox.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owlcarousel", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.carousel.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owlcarousel_min", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.carousel.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owl_theme_default", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.theme.default.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owl_theme_default_min", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.theme.default.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owl_theme_green", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.theme.green.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_owl_theme_green_min", get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.theme.green.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_font_awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("agency_bootstrap_icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css", array(), "1.0.0", "all");

    /** Scripts */ 

    wp_enqueue_script("agency_jquery_js", "https://code.jquery.com/jquery-3.4.1.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_bootstrap_min_js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array(), "1.0.0", "all");
    
    wp_enqueue_script("agency_counterup_min_js", get_template_directory_uri() . "/assets/lib/counterup/counterup.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_easing_js", get_template_directory_uri() . "/assets/lib/easing/easing.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_easing_min_js", get_template_directory_uri() . "/assets/lib/easing/easing.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_lightbox_js", get_template_directory_uri() . "/assets/lib/lightbox/js/lightbox.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_lightbox_min_js", get_template_directory_uri() . "/assets/lib/lightbox/js/lightbox.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_owl_js", get_template_directory_uri() . "/assets/lib/owlcarousel/owl.carousel.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_owl_min_js", get_template_directory_uri() . "/assets/lib/owlcarousel/owl.carousel.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_waypoint_js", get_template_directory_uri() . "/assets/lib/waypoints/waypoints.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_wow_js", get_template_directory_uri() . "/assets/lib/wow/wow.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_wow_min_js", get_template_directory_uri() . "/assets/lib/wow/wow.min.js", array(), "1.0.0", "all");
    wp_enqueue_script("agency_js", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0.0", "all");

}

add_action('wp_enqueue_scripts', 'agency_styles_and_scripts');
