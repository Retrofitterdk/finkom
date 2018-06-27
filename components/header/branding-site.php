<div class="site-branding">
  <?php
  the_custom_logo();
  $site_title = get_bloginfo( 'name' );
  if ( is_front_page() ) :
    ?>
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php finkom_split_title($site_title); ?></a></h1>
    <?php
    else :
      ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php finkom_split_title($site_title); ?></a></p>
      <?php
    endif;
    $finkom_description = get_bloginfo( 'description', 'display' );
    if ( $finkom_description || is_customize_preview() ) :
      ?>
      <p class="site-description screen-reader-text"><?php echo $finkom_description; /* WPCS: xss ok. */ ?></p>
    <?php endif; ?>
  </div><!-- .site-branding -->
