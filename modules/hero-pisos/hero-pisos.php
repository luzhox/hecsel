<section class="hero-pisos">
    <div class="slider-pisos owl-theme owl-carousel" >
    <?php if( have_rows('slider_pisos') ) {
            while( have_rows('slider_pisos') ) { the_row();  ?>
      <div class="item-pisos" style="background:url(<?php the_sub_field('imagen_de_piso')?>)">
      </div>
      <?php }} ?>  

    </div>
    <div class="overlay"></div>
    <div class="container">

        <img src="<?php the_sub_field('logo')?>" alt="">
        <h4 class="title"> <?php the_sub_field('titulo_superior')?></h4>
      <h1><?php the_sub_field('title')?></h1>
        <p><?php the_sub_field('copy_secundario')?></p>

        <?php if( have_rows('btn') ): 

while( have_rows('btn') ): the_row(); 
    // vars
		
		?>
         <a href="<?php the_sub_field('link');  ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('btntext'); ?></a>
         
         <?php endwhile; ?>
	
    <?php endif; ?>
    </div>
</section>

