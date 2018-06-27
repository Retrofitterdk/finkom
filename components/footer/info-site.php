<?php
/**
* Displays footer site info
*
* @package Fin:kom
* @since 1.0
* @version 1.0
*/
$site_title = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
$site_adress = get_option( 'woocommerce_store_address' );
$site_adress2 = get_option( 'woocommerce_store_address_2' );
$site_postcode = get_option( 'woocommerce_store_postcode' );
$site_city = get_option( 'woocommerce_store_city' );
$site_country = get_option( 'woocommerce_store_country' );
$site_phone = get_option( 'woocommerce_store_phone' );
$site_email = get_option( 'woocommerce_store_email' );

?>
<!-- the name of the organization -->
<div id="organization_info" class="site-info" itemscope itemtype="http://schema.org/Organization">
  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php finkom_split_title($site_title); ?></a></p>
  <?php if ( $site_description || is_customize_preview() ) : ?>
    <p class="site-description"><?php echo esc_html($site_description); /* WPCS: xss ok. */ ?></p>
  <?php endif; ?>
  <!-- address -->
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <?php if ( $site_adress || is_customize_preview() ) : ?>
      <p class="site-adress" id="postal_address" itemprop="streetAddress"><?php echo esc_html($site_adress); /* WPCS: xss ok. */ ?></p>
    <?php endif;
    if ( $site_adress2 || is_customize_preview() ) : ?>
    <p class="site-adress2" id="postal_address2" itemprop="streetAddress"><?php echo esc_html($site_adress2); /* WPCS: xss ok. */ ?></p>
  <?php endif;
  if ( $site_postcode || $site_city || is_customize_preview() ) : ?>
  <p class="zip-city">
    <?php if ( $site_postcode || is_customize_preview() ) : ?>
      <span class="site-postcode" id="postal_code" itemprop="postalCode"><?php echo esc_html($site_postcode); /* WPCS: xss ok. */ ?></span>
    <?php endif;
    if ( $site_city || is_customize_preview() ) : ?>
    <span class="site-city" id="postal_locality" itemprop="addressLocality"><?php echo esc_html($site_city); /* WPCS: xss ok. */ ?></span>
  <?php endif; ?>
</p>
<?php endif;
if ( $site_country || is_customize_preview() ) : ?>
<p class="site-country" id="postal_country" itemprop="addressCountry"><?php echo esc_html($site_country); /* WPCS: xss ok. */ ?></p>
<?php endif; ?>
</div><!--/itemtype=PostalAddress-->
<div class="contact-info"><!-- Contact information -->
<?php if ( $site_phone || is_customize_preview() ) : ?>
  <p class="site-phone">
    <a href="tel:<?php echo $site_phone ?>" itemprop="telephone"><?php echo esc_html($site_phone); /* WPCS: xss ok. */ ?></a>
  </p>
<?php endif;
if ( $site_email || is_customize_preview() ) : ?>
<p class="site-email">
  <a href="mailto:<?php echo $site_email ?>" itemprop="email"><?php echo esc_html($site_email); /* WPCS: xss ok. */ ?></a>
</p>
<?php endif; ?>
</div>
<?php if ( function_exists( 'the_privacy_policy_link' ) ) :
  the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
endif;
?>
</div><!--/itemtype=Organization-->
