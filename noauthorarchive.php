<?
/*
Plugin Name: No Archive Author
Plugin URI: http://www.alessiaricci.it/noauthor
Version: 1.1
Description: Disable Archive Author and redirect to homepage
Author: Alessia Ricci
Author URI: http://www.alessiaricci.it
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

function arnaa_disabilita_archivio_autori(){
	global $wp_query;
	if(($wp_query->is_author)&&(!(is_admin()))){
		
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".get_bloginfo( 'url' ));
		exit;
	}
}

add_action('wp', 'arnaa_disabilita_archivio_autori');
?>