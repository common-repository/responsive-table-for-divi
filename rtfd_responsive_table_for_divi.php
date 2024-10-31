<?php
 /**
 * Plugin Name:Responsive Table for Divi 
 * Plugin URI:https://www.sutersoftware.ch/responsive-table-for-divi/ 
 * Description:This plugin adds a Divi module that makes it easy for you to turn any HTML table into a responsive DataTable. And that in under 2 minutes. 
 * Version:1.0.4 
 * Author:Suter Software 
 * Author URI:https://www.sutersoftware.ch/ 
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html    
    Responsive Table for Divi is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version. 
    Responsive Table for Divi is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. 
    You should have received a copy of the GNU General Public License along with Responsive Table for Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html. 
 * */
    // Exit if accessed directly
    if (!defined("ABSPATH")) {
        exit;
    }
    
	    // Register styles and/or scripts - SS Assets
    function ss_datatable_assets_register_scripts_and_styles(){
		if ( ! wp_script_is('jquery.dataTables.min.css', 'enqueued')){
			wp_enqueue_style('ss-asset-css-0', plugins_url( '/assets/datatable/css/jquery.dataTables.min.css', __FILE__ ), array(), '1.13.4');
		}
		if ( ! wp_script_is('rowReorder.dataTables.min.css', 'enqueued')){
			wp_enqueue_style('ss-asset-css-1', plugins_url( '/assets/datatable/css/rowReorder.dataTables.min.css', __FILE__ ), array(), '1.3.3');
		}
		if ( ! wp_script_is('responsive.dataTables.min.css', 'enqueued')){
			wp_enqueue_style('ss-asset-css-2', plugins_url( '/assets/datatable/css/responsive.dataTables.min.css', __FILE__ ), array(), '2.4.1');
		}
		if ( ! wp_script_is('jquery.dataTables.min.js', 'enqueued')){
			wp_enqueue_script('ss-asset-js-0', plugins_url( '/assets/datatable/js/jquery.dataTables.min.js', __FILE__ ), array('jquery'), '1.13.4', true);
		}		
		if ( ! wp_script_is('dataTables.rowReorder.min.js', 'enqueued')){
			wp_enqueue_script('ss-asset-js-1', plugins_url( '/assets/datatable/js/dataTables.rowReorder.min.js', __FILE__ ), array('jquery'), '1.3.3', true);
		}	
		if ( ! wp_script_is('dataTables.responsive.min.js', 'enqueued')){
			wp_enqueue_script('ss-asset-js-2', plugins_url( '/assets/datatable/js/dataTables.responsive.min.js', __FILE__ ), array('jquery'), '2.4.1', true);
		}
		if ( ! wp_script_is('natural.js', 'enqueued')){
			wp_enqueue_script('ss-asset-js-3', plugins_url( '/assets/datatable/js/natural.js', __FILE__ ), array('jquery'), '2.3.0', true);  // Version 0.7 SS
		}
    }
    add_action("wp_enqueue_scripts", "ss_datatable_assets_register_scripts_and_styles"); 
	
    // Include the modules
    function rtfd_responsive_table_for_divi_load_the_modules(){
        require_once 'modules/_rtfd_883.php'; 

    }
    add_action("et_builder_ready", "rtfd_responsive_table_for_divi_load_the_modules"); 
    
    // Register styles and/or scripts
    function rtfd_responsive_table_for_divi_register_scripts_and_styles(){
        
        
        wp_register_script('dmb-module-883', plugins_url('', __FILE__).'/js/_rtfd_883.js', array('jquery'), '1.0.3', true); 
   
    }
    add_action("wp_enqueue_scripts", "rtfd_responsive_table_for_divi_register_scripts_and_styles"); 
    
    // Remove partial compatibility mesaage
    if ( ! function_exists( 'dmbpc_add_to_head' ) ) {
				function dmbpc_add_to_head() {
					if ( is_user_logged_in() ) {
						echo '<style>.et-fb-modal__support-notice {display: none !important;}</style>';
					}
				}
				add_action( 'wp_head', 'dmbpc_add_to_head' );
				add_action( 'admin_head', 'dmbpc_add_to_head' );
			}

?>