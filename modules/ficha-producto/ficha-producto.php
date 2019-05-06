<section class="ficha-producto" data-aos="fade-up" data-aos-offset="100">
    <div class="container">
        <h4 class="title"  data-aos="fade-up"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>
        <div class="contenido-ficha-producto">
            <div class="texto-producto" data-aos="fade-up">
                <?php the_sub_field('descripcion_producto') ?>
                <a href="#contacto-servicios" class="btn-producto"><?php the_sub_field('texto_boton')?></a>
            </div>
            <div class="image-producto" data-aos="fade-up">
                <img src="<?php the_sub_field('image_producto') ?>" alt="">
            </div>
        </div>
        
    </div>
</section>
