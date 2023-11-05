<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    wp_body_open();
    ?>
</head>

<body class="<?php body_class(); ?>">
    <!-- Header -->
    <?php get_template_part('/template-parts/header'); ?>