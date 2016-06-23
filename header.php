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
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

         <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
 
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>





<?php /* ?>

<header>
       <h1> <?php
if ( is_page()  ) {
    the_title();
}
else if (is_singular('post')) {
    the_title();
}
else if (is_home()) {
    bloginfo('name');
}
else if (is_category()) {
  get_the_category();
}

else if (is_search() ) {
      the_title();
}

else if (is_author()) {
  the_author();
}

else {
  echo "Arrumar";
}

?>

</h1>
</header>

<?php */ ?>

 <main>
