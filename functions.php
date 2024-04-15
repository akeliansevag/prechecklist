<?php

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/


// Add custom rewrite rule
function custom_rewrite_rule()
{
  add_rewrite_rule('^intl/?', 'index.php?pagename=prechecklist-intl', 'top');
  add_rewrite_rule('^bahrain/?', 'index.php?pagename=prechecklist-bahrain', 'top');
  add_rewrite_rule('^crypto/?', 'index.php?pagename=prechecklist-crypto', 'top');
  add_rewrite_rule('^jordan/?', 'index.php?pagename=prechecklist-jordan', 'top');
  add_rewrite_rule('^lebanon/?', 'index.php?pagename=prechecklist-lebanon', 'top');
  add_rewrite_rule('^nigeria/?', 'index.php?pagename=prechecklist-nigeria', 'top');
  add_rewrite_rule('^payabl/?', 'index.php?pagename=prechecklist-payabl', 'top');
}
add_action('init', 'custom_rewrite_rule');


add_action('wp_footer', 'mycustom_wp_footer');

function mycustom_wp_footer()
{
  return;
}


// add_filter('wpcf7_form_elements', function ($form) {
//   $form = str_replace('UTM SOURCE', $_GET['utm_source'], $form);
//   return $form;
// });

// add_filter('wpcf7_form_elements', function ($form) {
//   $form = str_replace('UTM MEDIUM', $_GET['utm_medium'], $form);
//   return $form;
// });

// add_filter('wpcf7_form_elements', function ($form) {
//   $form = str_replace('UTM CAMPAIGN', $_GET['utm_campaign'], $form);
//   return $form;
// });

// add_filter('wpcf7_form_elements', function ($form) {
//   $form = str_replace('UTM CONTENT', $_GET['utm_content'], $form);
//   return $form;
// });


if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  /*acf_add_options_page(array(
        'page_title'    => 'YOUR_PAGE_TILE Options',
        'menu_title'    => 'YOUR_MENU_TITLE Options',
        'menu_slug'     => 'options_services',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=services',
        'position'      => false,
        'icon_url'      => 'dashicons-images-alt2',
        'redirect'      => false,
    ));*/
}

// helper function to find a menu item in an array of items
function wpd_get_menu_item($field, $object_id, $items)
{
  foreach ($items as $item) {
    if ($item->$field == $object_id) return $item;
  }
  return false;
}

function wpd_nav_menu_breadcrumbs($menu)
{
  // get menu items by menu id, slug, name, or object
  $items = wp_get_nav_menu_items($menu);
  if (false === $items) {
    echo 'Menu not found';
    return;
  }
  // get the menu item for the current page
  $item = wpd_get_menu_item('object_id', get_queried_object_id(), $items);
  if (false === $item) {
    return;
  }
  // start an array of objects for the crumbs
  $menu_item_objects = array($item);
  // loop over menu items to get the menu item parents
  while (0 != $item->menu_item_parent) {
    $item = wpd_get_menu_item('ID', $item->menu_item_parent, $items);
    array_unshift($menu_item_objects, $item);
  }
  // output crumbs
  $crumbs = array();
  $crumbs[] = '<a href="' . home_url() . '">Home<a>';
  foreach ($menu_item_objects as $menu_item) {
    if (filter_var($menu_item->url, FILTER_VALIDATE_URL)) {
      $link = '<a href="%s">%s</a>';
      $crumbs[] = sprintf($link, $menu_item->url, $menu_item->title);
    } else {
      $crumbs[] = '<span>' . $menu_item->title . '</span>';
    }
  }

  echo join(' > ', $crumbs);
}



if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('extra-large', 1000, '', true); // extra Large Thumbnail
  add_image_size('large', 700, '', true); // Large Thumbnail
  add_image_size('medium', 250, '', true); // Medium Thumbnail
  add_image_size('medium-square', 250, 250, true); // Medium Square
  add_image_size('small-square', 120, 120, true); // Small Square
  add_image_size('avatar', 50, 50, true); // Small Square
  add_image_size('post-thumbnail', 500, 420, true); // Post Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail
  //add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
  add_image_size('banner-image', 1920, 1080, true);
  add_image_size('portfolio-thumbnail', 300, 200, true); // Custom Thumbnail Size call using
  the_post_thumbnail('custom-size');


  // Add Support for Custom Backgrounds - Uncomment below if you're going to use
  /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

  // Add Support for Custom Header - Uncomment below if you're going to use
  /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

  // Enables post and comment RSS feed links to head
  //add_theme_support('automatic-feed-links');

  // Localisation Support
  load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

add_rewrite_rule('^portfolio/page/([0-9]+)', 'index.php?pagename=portfolio&paged=$matches[1]', 'top');



/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav($location)
{
  wp_nav_menu(
    array(
      'theme_location'  => $location,
      'menu'            => '',
      'container'       => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
    )
  );
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/libraries/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('bootstrap-js'); // Enqueue it!

    wp_register_script('slick-js', get_template_directory_uri() . '/libraries/slick/slick.min.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('slick-js'); // Enqueue it!

    wp_register_script('fancybox-js', get_template_directory_uri() . '/libraries/fancybox/dist/fancybox.umd.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('fancybox-js'); // Enqueue it!

    wp_register_script('flickity-js', get_template_directory_uri() . '/libraries/flickity/flickity.pkgd.min.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('flickity-js'); // Enqueue it!

    wp_enqueue_script("sa-animateit-js", get_template_directory_uri() . "/libraries/animateit/js/css3-animate-it.js", array(), false, true);
    wp_enqueue_script("sa-waypoints-js", get_template_directory_uri() . "/libraries/waypoints/jquery.waypoints.min.js", array(), false, true);

    wp_enqueue_script("sa-bselect-js", get_template_directory_uri() . "/libraries/bootstrap-select/dist/js/bootstrap-select.min.js", array(), false, true);
    wp_enqueue_script("sa-counterup-js", get_template_directory_uri() . "/libraries/counter-up/jquery.counterup.min.js", array('jquery'), false, true);

    wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js?v=20', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('html5blankscripts'); // Enqueue it!
  }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
  if (is_page('pagenamehere')) {
    wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
    wp_enqueue_script('scriptname'); // Enqueue it!
  }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/libraries/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('bootstrap-css'); // Enqueue it!

  wp_register_style('slick-css', get_template_directory_uri() . '/libraries/slick/slick.css', array(), '1.0', 'all');
  wp_enqueue_style('slick-css'); // Enqueue it!

  wp_register_style('slick-theme-css', get_template_directory_uri() . '/libraries/slick/slick-theme.css', array(), '1.0', 'all');
  wp_enqueue_style('slick-theme-css'); // Enqueue it!

  wp_register_style('flickity-css', get_template_directory_uri() . '/libraries/flickity/flickity.min.css', array(), '1.0', 'all');
  wp_enqueue_style('flickity-css'); // Enqueue it!

  wp_register_style('fancybox-css', get_template_directory_uri() . '/libraries/fancybox/dist/fancybox.css', array(), '1.0', 'all');
  wp_enqueue_style('fancybox-css'); // Enqueue it!

  wp_enqueue_style("sa-animateit-css", get_template_directory_uri() . "/libraries/animateit/css/animations.css");

  wp_enqueue_style("sa-bselect-css", get_template_directory_uri() . "/libraries/bootstrap-select/dist/css/bootstrap-select.min.css");

  wp_register_style('html5blank', get_template_directory_uri() . '/style.css?v=34', array(), '1.0', 'all');
  wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
    'footer-menu' => __('Footer Menu', 'html5blank'),
    'mobile-menu' => __('Mobile Menu', 'html5blank')
  ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
  return is_array($var) ? array() : '';
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = sanitize_html_class($post->post_name);
  } elseif (is_singular()) {
    $classes[] = sanitize_html_class($post->post_name);
  }

  return $classes;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
  return;
  $big = 999999999;
  // echo paginate_links(array(
  //     'base' => str_replace($big, '%#%', get_pagenum_link($big)),
  //     'format' => '?paged=%#%',
  //     'current' => max(1, get_query_var('paged')),
  //     'total' => $query->max_num_pages
  // ));
}

// Remove Admin bar
function remove_admin_bar()
{
  return false;
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
  $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
  return $html;
}


add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{

  // loop
  foreach ($items as &$item) {
    // vars
    $mega_menu = get_field('mega_menu', $item);

    if ($mega_menu) {
      $item->classes[] = 'mega-menu';
    }

    $image_item = get_field("image_item", $item);
    if ($image_item) {
      $item->classes[] = 'item-with-image';
      $item->title = "<img src=" . $image_item['sizes']['medium_large'] . " >";
    }
  }
  // return
  return $items;
}

function yourprefix_menu_arrow($item_output, $item, $depth, $args)
{
  if ($args->menu->slug == 'mobile-menu') {
    if (in_array('menu-item-has-children', $item->classes)) {
      $arrow = '<span class="menu-toggle">+</span>'; // Change the class to your font icon
      $item_output = str_replace('</a>', '</a>' . $arrow . '', $item_output);
    }
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'yourprefix_menu_arrow', 10, 4);


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('rest_endpoints', function ($endpoints) {
  if (isset($endpoints['/wp/v2/users'])) {
    unset($endpoints['/wp/v2/users']);
  }
  if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
    unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
  }
  return $endpoints;
});
