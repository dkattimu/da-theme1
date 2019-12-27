<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="< !--?/*php get_stylesheet_uri();*/ ?>" rel="stylesheet"> -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="Attimu Dodzi, based on Mark Otto et al, and other Bootstrap contributors, & tutorials">
    <title>
        <?php bloginfo('name'); ?>|
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
</head>


<body>
    <!--<h4>< !--?/*php bloginfo("name")  */ ?> </h4>
    *</*?php echo ""; ?>-->

    <header>
        <nav class="navbar navbar-expand-md navbar-dark menu-bar">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
            ?>

        </nav>
    </header>


    <!--nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">BlueOrb AI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse show" id="navbarColor01" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url() ?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                < !--- Consider looping with wp_list_pages and their corresponding urls to do this... for all primary pages
                i.e. wp_list_pages !-- (array (
                    'title_li' => NULL //ensure title ommited
                     'child_of'=> $childID
                    )
                ) 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/about-us') ?>">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/blog') ?>">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/projects') ?>">PROJECTS</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav --->