
<section id="tipos-pisos">
    <div class="container">
    <div class="selectfilters"> 
        <div class="button-filter"><i class="icon-filtro"></i> Filtros</div>    
    </div>

        <div class="filter" data-aos="fade-up" data-aos-offset="100">
            <div class="cerrar-filtro icon-close">

            </div>
            <form action="" class="controls">
                <div id="intereses" class="category">
                <h3>LAMINADOS ALEMANES</h3>
                <fieldset data-filter-group class="radio-group">
            
                    <div class="radio">

                        <input type="checkbox" id="c1" name="Laminados 7mm" value=".laminados-7mm"/>
                        <label for="c1"><span></span></label>
                        <p>Laminados 7mm.</p>
                    </div>
                    <div class="radio">
                        <input type="checkbox" id="c2" name="Laminados 7mm biselado" value=".laminados-7mm-biselado"/>
                        <label for="c2"><span></span></label>

                        <p>Laminados 7mm. biselado</p>
                    </div>
                    <div class="radio">
                        <input type="checkbox" id="c3" name="Laminados 8mm" value=".laminados-8mm"/>
                        <label for="c3"><span></span></label>
                        <p>Laminados 8mm. </p>
                    </div>
                    <div class="radio">
                        <input type="checkbox" id="c4" name="Laminados 8mm biselado" value=".laminados-8mm-biselado"/>
                        <label for="c4"><span></span></label>
                        <p>Laminados 8mm. biselado</p>
                    </div>
                    </fieldset>
                </div>

                <div id="compania" class="category">
                <h3>Laminados Alemanes premium</h3>

                <fieldset data-filter-group class="radio-group">
                    <div class="radio">
                        <input type="checkbox" id="c5" name="Laminados 10mm biselado" value=".laminados-10mm-biselado"/>
                        <label for="c5"><span></span></label>
                        <p>Laminados 10 mm. biselado</p>
                    </div>   
                    <div class="radio">
                        <input type="checkbox"  id="c6" name="Laminados 12mm biselado" value=".laminados-12mm-biselado"/>
                        <label for="c6"><span></span></label>
                        <p>Laminados 12mm. biselado</p>
                    </div>  

                    <div class="radio">
                        <input type="checkbox" id="c7" name="Laminados 14mm biselado" value=".laminados-14mm-biselado"/>
                        <label for="c7"><span></span></label>
                        <p>Laminados 14mm. biselado</p>
                    </div>  
                </fieldset>

                </div>

                <div id="tiempo" class="category">
                <h3>estructurados portugueses</h3>
                <fieldset data-filter-group class="radio-group">
                    <div class="radio">
                            <input type="checkbox" id="c8" name="Pisos estructurados 12mm" value=".pisos-estructurados-12mm"/>
                            <label for="c8"><span></span></label>
                            <p>Pisos estructurados 12mm.</p>
                    </div>
                    <div class="radio">
                            <input type="checkbox" id="c9" name="Pisos estructurados 14mm" value=".pisos-estructurados-14mm"/>
                            <label for="c9"><span></span></label>
                            <p>Pisos estructurados 14mm.</p>
                    </div>  
                    <div class="radio">
                            <input type="checkbox"  id="c10" name="Pisos estructurados 15mm." value=".pisos-estructurados-15mm"/>
                            <label for="c10"><span></span></label>
                            <p>Pisos estructurados 15mm.</p>
                    </div>  
                   
                
                </fieldset>

                </div>
                <div id="tiempo" class="category">
                <h3>pISO Resistente al agua  (SPC)</h3>
                <fieldset data-filter-group class="radio-group">
                    <div class="radio">
                            <input type="checkbox" id="c11" name="Pisos SPC Residencial." value=".pisos-spc-residencial"/>
                            <label for="c11"><span></span></label>
                            <p>Pisos SPC Residencial.</p>
                    </div>
                    <div class="radio">
                            <input type="checkbox" id="c12" name="Cuantos dias" value=".pisos-spc-comercial"/>
                            <label for="c12"><span></span></label>
                            <p>Pisos SPC Comercial</p>
                    </div>  
                
                
                </fieldset>

                </div>

                </form>
        </div>


 
        <div class="pisos-categoria">

         <?php $args = array(
     'post_type'=>'pisos',
    'orderby'=> 'date',
    'order'=>'ASC'); ?>

  <?php $family = new WP_Query($args);?>
  <?php while($family->have_posts()): $family->the_post();?>
            <div class="piso mix <?php
        $category_array = wp_get_post_categories($post->ID);
        $category_list = array();
        foreach ( $category_array as $categories ) {
            $category_list[] = strtolower(str_replace(' ','-',get_cat_name( $categories )));
        }

        $lister = implode(' ' , $category_list);
        
        $list_categories = $lister;
        echo $lister ;
    ?> ">
            <div data-aos="fade-up" data-aos-offset="100" class="item">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

                <div class="img" style="background-image:url(<?php echo $url; ?>); background-size:cover; background-position:center;"></div>
                <div class="text">
                    <h3><?php the_title()?></h3>
                   <?php the_excerpt()?>
                    <a href="<?php the_permalink()?>" target="_blank" rel="noopener noreferrer">Ver producto</a>
                </div>
            </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <div class="controls-pagination">
            <div class="mixitup-page-list"></div>
        </div>

  
        </div>
    </div>
<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup-multifilter.min.js"></script>
    <script>
    
    var containerEl = document.querySelector('.pisos-categoria');
    var currentLimit = 3;
    var loadMoreEl = document.querySelector('.load-more');
    var incrementAmount = 6;

    if (window.matchMedia("(min-width: 450px)").matches) {
        var currentLimit = 6;
} else {
    var currentLimit = 3;
}



var mixer = mixitup(containerEl, {
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    },
    pagination: {
                    limit: currentLimit
                }
             
});



</script>
</section>