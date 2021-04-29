<?php
/**

* Plugin Name: Custom API

* Plugin URI : https://wordpress.org/plugins/ahaladh/

* Description: Enables the WordPress to get two API responses to get the wordpress informations and database table deatails. To get the wordpress information use url index.php/wp-json/wp-content/plugins/ahaladh/api.php?m=wp-info.To get the database table information use url index.php/wp-json/wp-content/plugins/ahaladh/api.php?m=db-info.
 * Version:     1.6
 * Author:      WordPress Contributors
 * Author URI:  https://github.com/WordPress/ahaladh/

 */

/*
  Two 

*/
require_once(ABSPATH . 'wp-admin/includes/file.php');
add_action('rest_api_init', function () {
  register_rest_route( 'wp-content/plugins', 'ahaladh/api.php',array(
                'methods'  => 'GET',
                'callback' => 'wc_rest_ahaladh_handler'
      ));
});

function wc_rest_ahaladh_handler( $data ) {

 
	if( isset( $_GET['m'] ) && $_GET['m'] == 'wp-info' ){

      $wp_infos = array();
      $wp_infos['site_name'] = get_bloginfo();
      $wp_infos['site_url']  = get_bloginfo('url');
      $wp_infos['wp_base_absolute_path']  = get_home_path();
      $wp_infos['wp_content_absolute_path']  = content_url();
      $fi = new FilesystemIterator(get_home_path(), FilesystemIterator::SKIP_DOTS);
      $wp_infos['files_count']  = iterator_count($fi);
	  return new WP_REST_Response( wp_send_json( $wp_infos ) );

    }
    if( isset( $_GET['m'] ) && $_GET['m'] == 'db-info' ){

      global $wpdb;

    $sql = "SHOW TABLES";
	$results = $wpdb->get_results($sql);

	$table_data = array();

	foreach($results as $index => $value) {
	    foreach($value as $tableName) {
	    	$rowcount = $wpdb->get_var("SELECT COUNT(*) FROM $tableName");
	        $table_data[$tableName] = array( 'records' => $rowcount );
	    }
	}
    
    $table_datas = array('tables' => $table_data );
	return new WP_REST_Response( wp_send_json( $table_datas ) );

    }
  // return $data['m'];
}