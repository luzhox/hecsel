<section class="our-products-hecsel">
    <div class="container">
        <div class="our-products-hecsel__filter">
           <?php the_sub_field('titulo')?>
           <form action="" class="controls">
            <div class="our-products-hecsel__filter__items">
            <fieldset data-filter-group class="radio-group">

            <?php if (have_rows('botones_filtros')) {while (have_rows('botones_filtros')) {the_row();?>
                <div class="our-products-hecsel__filter__items__item">
                <input type="radio" id="<?php the_sub_field('categoria')?>" name="filter" value=".<?php the_sub_field('categoria')?>">
                <label for="<?php the_sub_field('categoria')?>">
                    <span></span>
                </label>
                <p><?php the_sub_field('texto_del_boton')?></p>
            </div>
        <?php }
}?>
<div class="our-products-hecsel__filter__items__item">
                <input type="radio" id="todos" name="filter" value="all">
                <label for="todos">
                    <span></span>
                </label>
                <p>Todos</p>
            </div>
                            </fieldset>
                            </form>
            </div>
        </div>

        <div class="our-products-hecsel__products-cont">


        <div class="our-products-hecsel__products">

<?php $args6 = array(
    'post_type' => 'producto',
    'post_parent' => 366,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args6);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>
                <?php $args7 = array(
    'post_type' => 'producto',
    'post_parent' => 339,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args7);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>


           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>

            <?php $args2 = array(
    'post_type' => 'producto',
    'post_parent' => 310,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args2);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>
            <?php $args4 = array(
    'post_type' => 'producto',
    'post_parent' => 341,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args4);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>
<?php $args3 = array(
    'post_type' => 'producto',
    'post_parent' => 340,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args3);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array1 = wp_get_post_categories($post->ID);
    $category_list1 = array();
    foreach ($category_array1 as $categories1) {
        $category_list1[] = strtolower(str_replace(' ', '-', get_cat_name($categories1)));
    }
    $lister1 = implode(' ', $category_list1);
    $list_categories1 = $lister1;
    echo $lister1;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>

           <?php $args5 = array(
    'post_type' => 'producto',
    'post_parent' => 342,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args5);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>



            <?php $args5 = array(
    'post_type' => 'producto',
    'post_parent' => 471,
    'orderby' => 'date',
    'order' => 'DESC');?>
            <?php $family = new WP_Query($args5);?>
            <?php
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
echo $imgDestacada;
?>
           <?php while ($family->have_posts()): $family->the_post();?>
		            <div class="our-products-hecsel__products__item mix <?php
    $category_array = wp_get_post_categories($post->ID);
    $category_list = array();
    foreach ($category_array as $categories) {
        $category_list[] = strtolower(str_replace(' ', '-', get_cat_name($categories)));
    }
    $lister = implode(' ', $category_list);
    $list_categories = $lister;
    echo $lister;
    ?>">
		                <div class="img">
		                    <img src="  <?php global $post;
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    echo $imgDestacada;?>"
		                    title="<?php echo the_title(); ?>"
		                    alt="<?php echo the_title(); ?>" />
		                </div>
		                <div class="text">
		                    <h4><?php echo the_title() ?></h4>
		                    <p><?php echo the_excerpt() ?></p>
		                    <a href="<?php the_permalink()?>" class="btn__primary">Ver producto</a>
		                </div>
		            </div>
		            <?php endwhile;
wp_reset_postdata();?>


        </div>
        <div class="mixitup-page-list"></div>
        </div>
    </div>
</section>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup-multifilter.min.js"></script>
    <script>

    var containerEl = document.querySelector('.our-products-hecsel__products');

    var mixer = mixitup(containerEl, {
        multifilter: {
            enable: true
        },
    //     pagination: {
    //     limit: 6 // impose a limit of 8 targets per page
    // },
        animation: {
            effects: 'fade'
        },

    });



</script>

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
