<div class="citat">
</div>
<div class="about">
	 <p>
			<?php

			if (have_posts()): 
			    while (have_posts()): 
			        the_post();
			    ?>
				<div id="picture">
 					<?php the_post_thumbnail( 'single' ); ?>
 				</div>
 				<div id="text">
 					<h1><?php the_title() ?></h1>
				
			   <?php the_content(); ?>
			   
			    </div>
			    
			   <?php
				//Inside the loop: HTML and template tags

			    endwhile; 
			endif;

			?>
		</p>
</div>
<div class="lyssna">
</div>