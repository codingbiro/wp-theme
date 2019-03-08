<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?> | <?php  bloginfo('description'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/icon.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="navbar-example2" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand"><?php bloginfo( 'name' ); ?></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <?php wp_nav_menu( array (
        'menu'            => 'main-menu',
        'container'       => FALSE,
        'container_id'    => FALSE,
        'menu_class'      => 'navbar-nav',
        'menu_id'         => FALSE,
        'depth'           => 1,
        'walker'          => new Description_Walker));?>
        <!-- <ul class="navbar-nav">
                <li id="nav-1" class="nav-item scrollable active" onlclick="scrolljs(1)">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li id="nav-2" class="nav-item scrollable" onlclick="scrolljs(2)">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li id="nav-3" class="nav-item scrollable" onlclick="scrolljs(3)">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul> -->
        </div>
    </nav>