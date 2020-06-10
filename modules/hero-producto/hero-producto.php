<section class="hero-product" style="background:url(<?php the_sub_field('background_desktop')?>); background-size:cover; background-position:center;">
  <div class="container">
    <div class="overlay"></div>
    <div class="hero-product__text">
    <?php the_sub_field('text-product')?>
      <div class="hero-product__buttons">
        <button class="btn__primary cotiza"><?php the_sub_field('texto_del_boton_cotizar')?></button>
        <?php
        $link = get_sub_field('boton_ficha');
        $exist = get_sub_field('hay_ficha_tecnica');
    	if( $exist ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="btn__primary--border" href="<?php echo esc_url( $link_url ); ?>" target="_blank">VER FICHA</a>
    <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<style>

.btn__whastapp {
  width: 58px;
  position: fixed;
  right: 37px;
  bottom: 44px;
  z-index: 9999;
  height: 58px;
  border-radius: 50%;


}
@media only screen and (min-width:768px){
  .btn__whastapp{
    right:60px;
    bottom: 54px;
  }
}

</style>


