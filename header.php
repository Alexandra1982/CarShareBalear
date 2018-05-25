<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo( 'name' ); ?><?php  wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #FFF;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CarShareBalear.com</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <?php

              $defaults = array (
              'theme_location' => 'primary',
              'container' => 'false',
              'menu_class' => 'nav navbar-nav',
              'depth' => 2,
              'Walker' => new wp_bootstrap_navwalker ()
            );

              wp_nav_menu($defaults);

              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
