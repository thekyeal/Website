<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php do_action( 'bam_body_top' ); ?>


        
<div id="page" class="site">
  
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bam' );?></a>
	
 		<br>
 		<?php
		 if(is_user_logged_in())
		 {
		 ?>
		 	  <?php 
		 	    $current_user = wp_get_current_user();
		 	  ?><div style="position: absolute; top: 65px; left: 1520px;"><? echo get_avatar( $current_user->ID, 32 );?> </div>
		 	   

		 	 <button  onclick="window.location.href ='<?php echo wp_logout_url();?>'" style="float: right;" type="button" >Logout</button>
		 	 <?php
		 }
		 else
		 {
		  ?>
		  	<button  onclick="window.location.href ='<?php echo esc_url(site_url('/wp-login.php')); ?>';" style="float: right;" type="button" >Login</button>
		 	<button  onclick="window.location.href ='<?php echo esc_url(site_url('/wp-signup.php')); ?>';" style="float: right;" type="button" >Sign up</button>
		 	<?php
		 }
		 ?>
	 
	  
	 
	 
        
	<?php do_action( 'bam_header' ); ?>

	<?php do_action( 'bam_before_content' ); ?>
	

	<div id="content" class="site-content">
		<div class="container">
		
