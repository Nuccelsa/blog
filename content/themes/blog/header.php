<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="body">

  <div class="wrapper">

    <header class="header">

    <?php get_template_part('template-parts/header/nav', 'top');?>
    <?php get_template_part('template-parts/header/nav', 'aside');?>

    </header>

