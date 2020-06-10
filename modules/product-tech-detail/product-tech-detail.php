<section class="product-tech-detail">
    <div class="container">
        <h3 class="title"><?php the_sub_field('titulo')?></h3>
        <div class="product-tech-detail__items">
        <?php if (have_rows('caracteristicas')) {while (have_rows('caracteristicas')) {the_row();?>
                <div class="product-tech-detail__items__item">
                    <h4><?php the_sub_field('texto_resaltado')?></h4>
                    <p><?php the_sub_field('texto_secundario')?></p>
                </div>
            <?php }
        }?>
        </div>
    </div>
</section>