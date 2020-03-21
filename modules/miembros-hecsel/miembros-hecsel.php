<div class="members-hecsel">
    <div class="container">
        <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
        <h2 class="title"><?php the_sub_field('title')?></h2>
        <div class="slider-members owl-carousel owl-theme">
        <?php if( have_rows('miembros') ) {while( have_rows('miembros') ) { the_row();  ?>
            <?php $image = get_sub_field('foto_del_miembro');   
               if( $image): ?>
            <div id="<?php echo ($image['id']);?>" class="member">
                <div class="img"  data-image="<?php echo esc_url($image['url']);?>" style="background-image:url(<?php echo esc_url($image['url']);?>)"></div>
                <?php endif; ?>
                <div class="content">
                    <div class="member__name"><?php the_sub_field('nombre_del_miembro')?></div>
                    <div class="member__position"><?php the_sub_field('cargo_del_miembro')?></div>
                    <div class="member__work"><?php the_sub_field('empresa_del_miembro')?></div>
                    <div class="member__content"><?php the_sub_field('bio_del_miembro')?></div>
                </div>
                <div class="socials">
                    <?php if(get_sub_field('tiene_linkedin')):?>
                    <a href="<?php the_sub_field('linkedin')?>" target="_blank" class="icoLinkedin"></a>
					<?php endif; ?>
					
					<?php if(get_sub_field('tiene_twitter')):?>
                    <a href="<?php the_sub_field('twitter')?>" target="_blank" class="icoTwitter"></a>
					<?php endif; ?>
                <?php if(get_sub_field('tiene_bio')):?>
                    <a  class="bio">Bio</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php }} ?>  
        </div>
        <section class="modal" id="modalMiembro">
            <div class="overlay"></div>
            <div class=" modal-container">
                <div class="modal-content">
                        <div class="imagen">
                        </div>
                        <div class="text">
                            <h3></h3>
                            <span></span>
                            <div class="contenido-bio"></div>
                        </div>   
                    </div>
                <button class="close" data-modal="modalMiembro"></button>
                </div>
        </section>
    </div>
</div>

