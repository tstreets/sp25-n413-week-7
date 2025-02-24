<?php

function setup_optionone_styles()
{
    wp_enqueue_style("optionone-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "setup_optionone_styles");
