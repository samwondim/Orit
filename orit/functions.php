<?php

function orit_theme_support() {
    // Adds dynamic title support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'orit_theme_support');


function orit_about_shortcode()
{
    include_once 'about.php';
}

add_shortcode('orit-about-shortcode', 'orit_about_shortcode');

function orit_home_shortcode()
{
    include_once 'home.php';
}

add_shortcode('orit-home-shortcode', 'orit_home_shortcode');

function orit_workloading_shortcode() {
    include 'workloading.php';
}

add_shortcode('orit-workloading-shortcode', 'orit_workloading_shortcode');

function orit_inventory_shortcode() {
    include 'inventory.php';
}

add_shortcode('orit-inventory-shortcode', 'orit_inventory_shortcode');

function orit_assets_shortcode() {
    include 'assets.php';
}

add_shortcode('orit-assets-shortcode', 'orit_assets_shortcode');



function orit_menus() {
    $locations = array(
        'primary' => 'desktop primary left sidebar',
        'footer' => 'footer menu items'
    );

    register_nav_menus($locations);
}

add_action('init', 'orit_menus');

function tailwindcss_setup_scripts()
{
    wp_enqueue_style('tailwindcss_setup-style', get_template_directory_uri() , array(), '1.0');
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . "/dist/output.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', "tailwindcss_setup_scripts");