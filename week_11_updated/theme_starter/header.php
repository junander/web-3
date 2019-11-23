<!doctype html>
<html <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <!-- wrapper -->
    <div class="wrapper">

        <!-- header -->
        <header class="header clear" role="banner">

            <!-- logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-moon-64.png" alt="Logo"
                        class="logo-img">
                </a>
            </div>
            <!-- /logo -->

            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
				$args = array(
					'theme_location' => 'main',
					'menu_class' => 'navbar-nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarSupportedContent',
				);
				wp_nav_menu($args)?>
            </nav>
            <!-- /nav -->

        </header>
        <!-- /header -->