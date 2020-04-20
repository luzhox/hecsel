<div class="sponsors">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="owl-carousel owl-theme sponsors__container">
        <?php if (have_rows('sponsors')) { while(have_rows('sponsors') ) { the_row();  ?>
            <div class="sponsors__container__item" >
                <img src="<?php the_sub_field('imagen')?>" alt="">
            </div>
        <?php } 
        }?>  
        </div>
    </div>
</div>