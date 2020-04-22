<?php  
    get_header(); // pulls the content from header.php

 ?>

  
  <?php  
	while(have_posts())
	{  
	        the_post(); 
	        the_content();
	}      
?>


<?php
    get_footer(); // pulls content from footer.php
?>
