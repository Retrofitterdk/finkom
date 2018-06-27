<a href="#site-navigation" role="button" id="primary-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-label="<?php esc_html_e( 'Open primary menu', 'finkom' ); ?>" aria-expanded="false"><?php esc_html_e( 'Content', 'finkom' ); ?></a>
<nav id="site-navigation" class="main-navigation" aria-expanded="false">
  <a href="#" role="button" id="primary-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-label="<?php esc_html_e( 'Close primary menu', 'finkom' ); ?>" aria-expanded="false"><?php esc_html_e( 'Content', 'finkom' ); ?></a>
  <?php
  get_template_part( 'components/navigation/menu', 'main' );
  get_template_part( 'components/navigation/menu', 'social' );
  ?>
</nav><!-- #site-navigation -->
<a href="#" class="backdrop" tabindex="-1" aria-hidden="true" hidden></a>
