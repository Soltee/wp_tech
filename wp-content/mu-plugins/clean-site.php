<?php
function update_adminbar($wp_adminbar) {

  // remove unnecessary items
  $wp_adminbar->remove_node('wp-logo');
  $wp_adminbar->remove_node('customize');
  $wp_adminbar->remove_node('comments');
  $wp_adminbar->remove_node('updates');
  $wp_adminbar->remove_node('new-content');
  $wp_adminbar->remove_node('edit');
  // $wp_adminbar->remove_node('my-account');

}

// admin_bar_menu hook
add_action('admin_bar_menu', 'update_adminbar', 999);


add_action('admin_init', 'remove_dashboard_widgets');

function remove_dashboard_widgets()
{
	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );

}
