<?php
/**
 * frontend_config.php
 *
 * Author: pixelcave
 *
 * Frontend configuration file (overwrites some options from global configuration file - config.php)
 *
 */

// Frontend Included Files
$one->inc_side_overlay             = false;
$one->inc_sidebar                  = 'frontend_sidebar.php';
$one->inc_header                   = 'frontend_header.php';

// Frontend Header Options
$one->l_header_transparent         = true;     // True: Transparent header (if also fixed, it will get a solid dark background color on scrolling), False: White solid header

// Frontend Sidebar Options
$one->l_sidebar_mini               = true;     // True: Mini Sidebar Mode (> 991px), False: Disable mini mode

// Frontend Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Home</span>',
        'icon'  => 'si si-home',
        'sub'   => array(
            array(
                'name'  => 'Default Navigation',
                'url'   => 'frontend_home.php',
            ),
            array(
                'name'  => 'Header Navigation',
                'url'   => 'frontend_home_header_nav.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Features</span>',
        'icon'  => 'si si-energy',
        'url'   => 'frontend_features.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pricing</span>',
        'icon'  => 'si si-wallet',
        'url'   => 'frontend_pricing.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Contact</span>',
        'icon'  => 'si si-envelope-open',
        'url'   => 'frontend_contact.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pages</span>',
        'icon'  => 'si si-book-open',
        'sub'   => array(
            array(
                'name'  => 'Team',
                'url'   => 'frontend_team.php',
            ),
            array(
                'name'  => 'Support',
                'url'   => 'frontend_support.php',
            ),
            array(
                'name'  => 'Search',
                'url'   => 'frontend_search.php',
            ),
            array(
                'name'  => 'About',
                'url'   => 'frontend_about.php',
            ),
            array(
                'name'  => 'Log In',
                'url'   => 'frontend_login.php',
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'frontend_signup.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Blog</span>',
        'icon'  => 'si si-pencil',
        'sub'   => array(
            array(
                'name'  => 'Classic',
                'url'   => 'frontend_blog_classic.php',
            ),
            array(
                'name'  => 'List',
                'url'   => 'frontend_blog_list.php',
            ),
            array(
                'name'  => 'Grid',
                'url'   => 'frontend_blog_grid.php',
            ),
            array(
                'name'  => 'Story',
                'url'   => 'frontend_blog_story.php',
            ),
            array(
                'name'  => 'Story Cover',
                'url'   => 'frontend_blog_story_cover.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">e-Learning</span>',
        'icon'  => 'si si-graduation',
        'sub'   => array(
            array(
                'name'  => 'Courses',
                'url'   => 'frontend_elearning_courses.php'
            ),
            array(
                'name'  => 'Course',
                'url'   => 'frontend_elearning_course.php'
            ),
            array(
                'name'  => 'Lesson',
                'url'   => 'frontend_elearning_lesson.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">e-Commerce</span>',
        'icon'  => 'si si-bag',
        'sub'   => array(
            array(
                'name'  => 'Home',
                'url'   => 'frontend_ecom_home.php'
            ),
            array(
                'name'  => 'Search Results',
                'url'   => 'frontend_ecom_search.php'
            ),
            array(
                'name'  => 'Products List',
                'url'   => 'frontend_ecom_products.php'
            ),
            array(
                'name'  => 'Product Page',
                'url'   => 'frontend_ecom_product.php'
            ),
            array(
                'name'  => 'Checkout',
                'url'   => 'frontend_ecom_checkout.php'
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Apps</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Backend</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'index.php'
    )
);