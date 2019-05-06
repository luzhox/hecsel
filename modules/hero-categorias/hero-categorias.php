<section class="hero-cat" data-aos="fade-up" style="background:url(<?php the_sub_field('img')?>)">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-up">
    <h4  class="title" ><?php the_sub_field('copy_secundario')?></h4>
    <h2 class="title"> <?php the_sub_field('title')?></h2>

        <?php if( have_rows('btn') ): 

while( have_rows('btn') ): the_row(); 
    // vars
		
		?>
         <a href="<?php the_sub_field('link');  ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('btntext'); ?></a>
         
         <?php endwhile; ?>
	
    <?php endif; ?>
    </div>
</section>

