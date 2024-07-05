<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class( ); ?> >

    <!-- Pre loader area -->
    <?php echo get_template_part('inc/common/loader'); ?>

    <!-- back to top -->
     <?php echo get_template_part('inc/common/back-to-top'); ?>

    <!-- header 1 area -->
    <?php echo get_template_part( 'template-parts/header/header-1' ) ?>