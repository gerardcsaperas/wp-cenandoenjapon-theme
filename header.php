<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- wp_head() makes wordpress to inject head files by itself. -->
    <?php  wp_head(); ?>
</head>

<body>
    <header>
        <?php if (function_exists( 'the_custom_logo' )) {
            the_custom_logo();
        } ?>
        <nav>
            
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="" >%3$s</ul>'
                        )
                    );
                ?>
        </nav>
        <hr>
        <a href="https://www.instagram.com/trupical/">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/trupical/">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/trupical/">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
    </header>