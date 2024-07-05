<?php

// techub theme support function 

function techub_theme_support()
{
    // Post Thumbnails
    add_theme_support('post-thumbnails');

    // Title Tag
    add_theme_support('title-tag');

    // Automatic Feed Links
    add_theme_support('automatic-feed-links');

    // HTML5 Support
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

    // Customize Selective Refresh Widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'image', 'video', 'audio', 'quote', 'status', 'chat', 'link'));
}

add_action("after_setup_theme", "techub_theme_support");


// stylesheet and script file
include_once('inc/common/script.php');

