<section class="hero-nosotros">
    <div class="container">
        <div class="text">
            <?php the_sub_field('text')?>
        </div>
        <div class="img">
        <?php $image = get_sub_field('imagen');   
        if($image) : ?>
            <img src="<?php echo esc_url($image['url']);?>" title="<?php echo ($image['title']);?>" alt="<?php echo ($image['alt']);?>" />
        <?php endif; ?>
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
