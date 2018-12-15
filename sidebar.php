<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php

dynamic_sidebar( 'sidebar-1' );

?>

<aside id="misidebar" class="widgets-area">
	<?php 
		dynamic_sidebar( 'misidebar' ); 
	?>
</aside>

