<?php
/**
 * Plugin Name:       hidesidebar 
* Plugin URI:        http://wedevall.com/download/hidesidebar/ 
* Description:       This hides the sidebar of the twenty fifteen theme. 
* Version:           1.0
* Author:            Djouonang Landry 
* License:           GPL-2.0+ 
* Text Domain:       hidesidebar 

*/ function hide_sidebar() {  
wp_enqueue_style( 'custom-script140', plugins_url('css/style2.css',__FILE__ ));   

}
add_action( 'wp_enqueue_scripts','hide_sidebar');
