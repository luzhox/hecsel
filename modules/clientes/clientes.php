<section class="clientes">
    <div class="container">
        <h4 class="title"  data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('titulo_principal')?></h2>

        <div class="clientes-satisfechos owl-theme owl-carousel">
        <?php if( have_rows('clientes') ) {
            while( have_rows('clientes') ) { the_row();  ?>
                <div class="card-cliente" data-aos="fade-up" data-aos-offset="100" class="recurso" >
                <div class="imagen">
                    <img src="<?php the_sub_field('img')?>" alt="">
                </div>
                <div class="text" >
                    <h3><?php the_sub_field('titulo_de_proyecto')?></h3>
                    <p><?php the_sub_field('descripcion')?></p>
                </div>
            </div>

            <?php }} ?>  
        </div>
    </div>
</section>
