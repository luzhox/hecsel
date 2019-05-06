<section class="marcas" data-aos="fade-up" >
    <div class="container">
        <h4 class="title" data-aos="fade-up" > <?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up" ><?php the_sub_field('titulo_principal')?></h2>

        <div class="marcas-partners">
        <?php if( have_rows('parnerts') ) {
            while( have_rows('parnerts') ) { the_row();  ?>
  <div class="card-partner" data-aos="fade-up" data-aos-offset="100" class="recurso" 0>
                <div class="logo">
                    <img src="<?php the_sub_field('img')?>" alt="">
                </div>
                <div class="text" >
                    <p><?php the_sub_field('descripcion')?></p>
                </div>
            </div>

            <?php }} ?>  
        </div>
    </div>
</section>