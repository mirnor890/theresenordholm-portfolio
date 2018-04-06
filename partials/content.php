<?php

			if (have_posts()): 
			    while (have_posts()): 
			        the_post();
			    ?>
				<div id="citat" >
 					<?php the_post_thumbnail( 'background' ); ?>
 				</div>

 				<div id="text">
 					
			    </div>
			    
			   <?php
			    endwhile; 
			endif;

			?>