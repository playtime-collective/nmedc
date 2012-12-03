<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>
    <?php echo get_bloginfo( 'name' ) . " " . get_bloginfo( 'description' )  ?>
  </title>
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class($page_slug); ?>>     
  <header>
    <div class="container">
      <div class="branding">
        <a href="<?php bloginfo('url'); ?>/">
          <img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
          <h1><?php echo get_bloginfo( 'name' ) ?></h1>
          <p class="description"><?php echo get_bloginfo( 'description' ) ?></p>
        </a>
      </div>
    </div>
    <?php wp_nav_menu( array('menu' => 'main-menu' )); ?>
  </header>