<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if (  is_singular() && get_option('thread_comments')  ) wp_enqueue_script( 'comment-reply' ); ?>

         <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

         <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon.ico" type="image/x-icon">
         <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon.ico" type="image/x-icon">

         <meta name="keywords" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>




  <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas></div>
  <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right"></div>

<!-- // offcanvas -->
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-right" id="offCanvas" data-off-canvas>


       <div class="off-canvas-content">
           <!-- Menu -->
             <ul class="vertical menu" data-drilldown>
              <li>
                <a href="#Item-1">Item 1</a>
                <ul class="vertical menu">
                  <li><a href="#">Foundation</a></li>
                  <li><a href="#">Dot</a></li>
                  <li><a href="#">ZURB</a></li>
                  <li><a href="#">Com</a></li>
                  <li><a href="#">Slash</a></li>
                  <li><a href="#">Sites</a></li>
                </ul>
              </li>
              <li><a href="#Item-2">Item 2</a></li>
            </ul>
       </div>



         </div>

      <div class="off-canvas-content" data-off-canvas-content>
<!-- // end offcanvas -->





<header class="header">
           <a class="brand" href="<?php bloginfo('url') ?>" title="AltoQi | Software pare engenharia"> AltoQi </a>
         <nav class="navigation_me">
                <ul class="navigation_me__list">
                     <!-- <li class="navigation_me__list__item">  <a class="navigation_me__list__link navigation_me__list__link--login" href="#" data-reveal-id="login"> Acessar </a>   <a class="navigation_me__list__link navigation_me__list__link--register" href="#" data-reveal-id="register">Cadastre-se </a> </li>
                     <li class="navigation_me__list__item">  <a class="navigation_me__list__link notification-toggle" href="#"><i class="material-icons">notifications_none</i>  </a>   </li> -->
                    <li class="navigation_me__list__item">  <a class="navigation_me__list__link" data-toggle="offCanvasRight" data-open="offCanvasRight" href="#"><i class="material-icons">menu</i>  </a> </li>
                </ul>
          </nav>

<nav class="navigation_main">
      <?php wp_nav_menu(array(
                'menu' => '',
                'container' => 'div',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                 'depth' => 0,
                'walker' => '',
                'theme_location' => 'header-menu',
             ) );   ?>
</nav>

</header>




 <main>
