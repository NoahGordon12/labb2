<?php
/**
 * Plugin Name: My First Plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Noah
 * Author URI: http://www.mywebsite.com
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
 }





/* add_action( 'wp_head', 'remove_my_action' );
function remove_my_action() {
  if (is_shop()) {
    remove_action( 'custom_hook');
  }
}
 */