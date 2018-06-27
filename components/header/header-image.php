<?php
$header_image = get_header_image();
// If the Custom Header image has been set
if ( ! empty( $header_image ) ) : ?>
<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $header_image ); ?>)">
  <div class="wrapper">
    <?php get_template_part( 'components/header/branding', 'site' ); ?>
    <?php get_template_part( 'components/header/navigation', 'site' ); ?>
    <?php if ( finkom_is_frontpage() ) :
      the_title( '<h2 class="entry-title">', '</h2>' );
      endif; ?>
  </div>
</div>
<?php
// Otherwise, show an empty header background.
else : ?>
<div class="custom-header">
  <?php get_template_part( 'components/header/branding', 'site' ); ?>
  <?php get_template_part( 'components/header/navigation', 'site' ); ?>
</div>
<?php endif; ?>
