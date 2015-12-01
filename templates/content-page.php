<?php if (is_front_page() ){ ?>
<div class="sectors">
      <?php
      // if (has_nav_menu('home_sectors')) :
      //   wp_nav_menu(['theme_location' => 'home_sectors', 'menu_class' => 'div']);
      // endif;
      ?>
<?php if( have_rows('sector') ): ?>
 
    <ul>
 
    <?php while( have_rows('sector') ): the_row(); 
    		$image = wp_get_attachment_image_src(get_sub_field('image'), 'home');
    ?>
 
        <li> <a href=<?php the_sub_field('link'); ?> >
        	<div class="bgimg" style="background-image:url(<?php echo $image[0]; ?>);"><div class='desc'>
	        	<h2 class="notranslate"><?php the_sub_field('title'); ?> </h2>
	         	<span class="notranslate"><?php the_sub_field('text'); ?></span>
		     </div> </div>
		 </a>
     </li>
        

        
    <?php endwhile; ?>
 
    </ul>
 
<?php endif; ?>



    </div>

<?php } ?>


<?php the_content(); ?>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
