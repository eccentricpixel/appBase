<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 9]>    <html class="no-js lt-ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	<script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>

<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

	<title><?php wp_title(''); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
    	<div class="sitetitle"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"></a>
	</div>
    </li>

    
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar "><a href="#"><span></span></a></li>
  </ul>
  

  <section class="top-bar-section">
	
    <?php
      // Left Nav Section
      if ( has_nav_menu( 'header-menu-left' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'header-menu-left',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="left">%3$s</ul>',
              'fallback_cb' => false,
              'walker' => new appBase_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li'
              ) ),
          ) );
        }
      ?>

    <?php
      //Right Nav Section
      if ( has_nav_menu( 'header-menu-right' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'header-menu-right',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="right">%3$s</ul>',
              'fallback_cb' => false,
              'walker' => new appBase_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li'
              ) ),
          ) );
        }
      ?>
  </section>
</nav>




<?php if(is_front_page()): ?>
	
<?php elseif ( is_single()) : ?>

<?php elseif ( is_archive()) : ?>

<?php elseif(is_page('login')) : ?>

<?php elseif (is_page('about')): ?>

<?php elseif (is_page()): ?>
	
<?php else: ?>
	
<?php endif;  ?> 