<?php
function tailwindcss_setup_scripts()
{
    wp_enqueue_style('tailwindcss_setup-style', get_template_directory_uri() , array(), '1.0');
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . "/dist/output.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', "tailwindcss_setup_scripts");