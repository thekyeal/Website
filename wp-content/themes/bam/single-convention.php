<?php    
    get_header();
   
     while(have_posts()){  // WordPress function that returns the number of posts
       the_post(); 
       pageBanner();    
                      
?>
 
  	<?php 
	 	the_title('<h1>','</h1>' ); ?>
	 	<h3>Location: <?php the_field('location');?> </h3>
	 	<?php
		$date = new DateTime(get_field('date'));
		$date2 = new DateTime(get_field('date2'));
		?>
		<h4>Event Date: <?php echo $date->format('F d'); ?> -
			<?php echo $date2->format('d'); ?>
			<?php echo $date->format('Y'); ?>
		</h4>
		
		<?php
		the_content(); 
	
		$relatedBrand = get_field('related_bran');

	
		if($relatedBrand){
			echo '<h2 style="text-decoration: underline overline">Companies Attending</h2>';
			

			foreach ( $relatedBrand as $brand ){
			?>
			
				<a href=" <?php echo get_the_permalink($brand);?>">
				<?php echo get_the_title($brand);?></a>
				</br>
			<?php };
		}
			
		
	?>
			

<?php
  }
  get_footer();

?>