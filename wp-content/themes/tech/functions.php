<?php


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            // 'default_rows'    => 3,
            // 'min_rows'        => 2,
            // 'max_rows'        => 8,
            'default_columns' => 1,
            // 'min_columns'     => 2,
            // 'max_columns'     => 3,
        ),
    ) );

    add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}


/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_script( 'books-app-js', get_theme_file_uri( '/js/app.js' ), array( '' ), true, true );
    // wp_enqueue_script( 'books-app-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/olympos.min.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );



//Deffering JS
function defer_parsing_of_js($url) //Get the scripts
{
    if(is_admin()) return $url; //Donot do stupid with WP Admin
    if( false === strpos($url, '.js')) return $url;    //If not javascript files
    if (strpos($url, 'jquery.js')) return $url; //IF jquery.js
    //if (strpos($url, 'app.js')) return $url; //IF jquery.js
    return str_replace('src', 'defer src', $url); //Replace src with defer src to all 3rd party js

}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );


/* Login  */

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


function my_login_logo_url_title() {
    return 'Everyday with action.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/* Woocmmerce */
/** Dynamic Sidebar */
if(!is_shop()){

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    remove_action( 'pre_get_terms', 'wc_change_pre_get_terms', 10 );
}
// } else{
    function woocommerce_product_category( $args = array() ) {
        $woocommerce_category_id = get_queried_object_id();
      $args = array(
            'parent' => $woocommerce_category_id
      );
      $terms = get_terms( 'product_cat', $args );
      if ( $terms ) {
            echo '<ul class="woocommerce-categories">';
            foreach ( $terms as $term ) {
                echo '<li class="woocommerce-product-category-page">';
                // woocommerce_subcategory_thumbnail( $term );
                echo '<h2>';
                echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
                echo $term->name;
                echo '</a>';
                echo '</h2>';
                echo '</li>';
            }
            echo '</ul>';
      }
    }
    add_action( 'woocommerce_sidebar', 'woocommerce_product_category', 100 );

//}
