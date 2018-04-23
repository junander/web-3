<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title(''); ?>
		<?php if (wp_title('', false)) {
		echo ' :';
	} ?>
		<?php bloginfo('name'); ?>
	</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">
			
		<div id="menu">
                <?php
                
                $args = array(
                        'menu' => 'Top Menu',
                        'depth' => 2,
                        'menu_class' => 'menu-blue',
                    );
                
                ?>
				<?php wp_nav_menu($args); ?>
			</div>

		</header>
		<!-- /header -->