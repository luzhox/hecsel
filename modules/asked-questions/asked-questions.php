<div class="asked-question">
  <div class="container">
    <span class="section-title"><?php the_sub_field('titulo_de_la_seccion')?></span>
    <h2 class="title"><?php the_sub_field('title')?></h2>
    <div class="owl-carousel owl-theme asked-question__container">
    <?php if(have_rows('questions')) { while(have_rows('questions') ) { the_row();  ?>
      <?php  $image = get_sub_field('imagen'); if($image) : ?>
      <div id="<?php echo $image['id']?>" class="asked-question__container__item" href="<?php the_sub_field('link_de_producto')?>">
        <div class="img">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="content">
            <div class="member__answer"><?php the_sub_field('answer')?></div>
        </div>
        <div class="text">
          <h3 class="title question"><?php the_sub_field('title')?></h3>
          <button class="linkAnswer" >VER RESPUESTA</button>
        </div>
        </div>
    <?php }
    } ?>

</div>
<section class="modal modal-question" id="modalQuestion">
            <div class="overlay"></div>
            <div class=" modal-container">
                <div class="modal-content">
                        <div class="imagen">
                        </div>
                        <div class="text">
                            <h3></h3>
                            <div class="contenido-bio"></div>
                        </div>   
                    </div>
                <button class="close" data-modal="modalQuestion"></button>
                </div>
        </section>
  </div>
</div>