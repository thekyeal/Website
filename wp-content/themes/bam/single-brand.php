<?php    
    get_header();
   
     while(have_posts()){  // WordPress function that returns the number of posts
       the_post(); 
        pageBanner();
       
       
?>


 <?php 
 	the_content(); 
 	$relatedCon = get_field('related_convention');

	
		if($relatedCon){
			echo '<h2 style="text-decoration: underline overline">Convention(s) Attending/Hosting</h2>';
			

			foreach ( $relatedCon as $convention ){
			?>
			
				<a href=" <?php echo get_the_permalink($convention);?>">
				<?php echo get_the_title($convention);?></a>
				</br>
			<?php };
		}
 ?>
 
 

<?php
}

  get_footer();

?>