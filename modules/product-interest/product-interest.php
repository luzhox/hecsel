<section class="product-interest" style="background: url(<?php the_sub_field('imagen_de_fondo')?>); background-size:cover; background-position:center;">
  <div class="overlay"></div>
  <div class="container">
    <h3><?php the_sub_field('texto_de_interesa_del_producto')?></h3>
  <div class="product-interest__buttons">
          <button  class="btn__primary"><?php the_sub_field('texto_del_boton_cotizar')?></button>
          <?php 
          $link = get_sub_field('boton_ficha');
          $exist = get_sub_field('hay_ficha_tecnica');
          if( $exist ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
          <a class="btn__primary--border" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
  </div>
</section>