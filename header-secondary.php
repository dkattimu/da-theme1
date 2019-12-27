<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="<?/*php get_stylesheet_uri();*/ ?>" rel="stylesheet"> -->
</head>

<body>
    <!--<h4><?/*php bloginfo("name")  */ ?> </h4>
    *</*?php echo ""; ?>-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">BlueOrb AI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse show" id="navbarColor01" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url() ?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                <!--- Consider looping with wp_list_pages and their corresponding urls to do this... for all primary pages
                i.e. wp_list_pages(array(
                    'title_li' => NULL //ensure title ommited
                     'child_of'=> $childID
                    )
                )-->
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
    </nav>