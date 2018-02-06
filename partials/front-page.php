 <p>
			<?php

			if (have_posts()): 
			    while (have_posts()): 
			        the_post();
			    ?>
				<div id="picture" >
 					<?php the_post_thumbnail( 'background' ); ?>
 				</div>
 				<div id="text">
 					<h1><?php the_title() ?></h1>
				
			  <!--  <?php //include('single.php'); ?> -->
			  
			    </div>
			    
			   <?php
				//Inside the loop: HTML and template tags

			    endwhile; 
			endif;

			?>
		</p>