<section class="ficha-multidescriptiva" data-aos="fade-up" data-aos-offset="100">
    <div class="container">
        <h4 class="title"  data-aos="fade-up"><?php the_sub_field('titulo_secundario')?></h4>
        <h2 class="title" data-aos="fade-up"><?php the_sub_field('titulo_principal')?></h2>
        <div class="contenido-ficha-producto">
        <?php if(get_sub_field('multidescripciones')): $i = 0; ?>

        <div class="image-multi-producto" data-aos="fade-up">
            <?php while(has_sub_field('multidescripciones')): $i++; ?>
                <div class="item item-<?php echo $i?>" style="background:url(<?php the_sub_field('imagen')?>);" alt=""></div>
            <?php endwhile; ?>
        </div>

            <?php endif; ?>

            <?php if(get_sub_field('multidescripciones')): $i = 0; ?>

            <div class="ficha-multi-producto" data-aos="fade-up">
                <?php while(has_sub_field('multidescripciones')): $i++; ?>
                    <div class="text texto-<?php echo $i?>" onclick="changingContent(<?php echo $i?>)">
                    <h2><?php the_sub_field('titulo')?> <span class="icon-more"></span></h2>
                    <p><?php the_sub_field('texto')?></p>
                
                </div>
                <?php endwhile; ?>
            </div>

                <?php endif; ?>
        </div>
        
        <?php if(get_sub_field('multidescripciones')): $i = 0; ?>

        <div class="fichas-multiproducto-slide ">
        <?php while(has_sub_field('multidescripciones')): $i++; ?>

        <div class="slide-multiproducto slide-<?php echo $i?>">
            <div class="img">
                <img src="<?php the_sub_field('imagen')?>" alt="">
            </div>
            <div class="texto-slide-multiproducto">
                <h2><?php the_sub_field('titulo')?></h2>
                <p><?php the_sub_field('texto')?></p>
            </div>
        </div>
        <?php endwhile; ?>

        </div>
        <?php endif; ?>

        
    </div>
</section>

<script>

$ = jQuery.noConflict();

$(document).ready(function () {
    
    $('.item-1').addClass('active');
    $('.texto-1').addClass('active');


});

function changingContent(elemento) {
    $('.texto-'+elemento).click(function(){
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('.item-'+elemento).addClass('active');
    $('.item-'+elemento).siblings().removeClass('active');

    })

}

</script>
