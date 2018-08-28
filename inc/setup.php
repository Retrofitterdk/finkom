<?php

if ( ! function_exists( 'finkom_setup' ) ) :
  /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
  function finkom_setup() {
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Fin:kom, use a find and replace
    * to change 'finkom' to the name of your theme in all the template files.
    */
    load_theme_textdomain( 'finkom', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'main' => esc_html__( 'Main menu', 'finkom' ),
      'social' => esc_html__( 'Social menu', 'finkom' ),
    ) );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'finkom_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
    * Add support for core custom logo.
    *
    * @link https://codex.wordpress.org/Theme_Logo
    */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
  /**
   * Set up the WordPress core custom header feature.
   *
   * @link https://developer.wordpress.org/themes/functionality/custom-headers/
   *
   * @uses finkom_header_style()
   */

  add_theme_support(
    'custom-header', apply_filters(
      'finkom_custom_header_args', array(
        'default-image'          => '',
    		'default-text-color'     => '000000',
        'width'            => 2000,
        'height'           => 450,
        'flex-height'      => true,
        'wp-head-callback'       => 'finkom_header_style',
      )
    )
  );


  /**
  * Add support for wide alignment
  *
  */
  add_theme_support( 'align-wide' );

  /**
  * Add support for color palette
  *
  */
  add_theme_support( 'editor-color-palette',
  array(
    'name' => __('Dark primary color','finkom'),
    'color' => '#D32F2F',
  ),
  array(
    'name' => __('Primary color','finkom'),
    'color' => '#F44336',
  ),
  array(
    'name' => __('Light primary color','finkom'),
    'color' => '#FFCDD2',
  ),
  array(
    'name' => __('Accent color','finkom'),
    'color' => '#9E9E9E',
  ),
  array(
    'name' => __('Primary text color','finkom'),
    'color' => '#212121',
  ),
  array(
    'name' => __('Secondary text color','finkom'),
    'color' => '#757575',
  ),
  array(
    'name' => __('Icon text color','finkom'),
    'color' => '#FFFFFF',
  ),
  array(
    'name' => __('Divider color','finkom'),
    'color' => '#BDBDBD',
  )
);

/**
* Add support for the Custom Content Portfolio plugin
*
*/
add_theme_support( 'custom-content-portfolio' );

endif;
add_action( 'after_setup_theme', 'finkom_setup' );

/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function finkom_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'finkom_content_width', 640 );
}
add_action( 'after_setup_theme', 'finkom_content_width', 0 );

/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function finkom_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'finkom' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'finkom' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'finkom_widgets_init' );
