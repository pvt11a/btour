<?php get_header(); ?>
<section id="pvt_main">
    <div class="container">
        <?php get_sidebar() ?>
        <div id="main_right">
            <article id="pvt_conten">
                <div class="pvt_breadcrumbs">
                <?php setpostview( get_the_ID() ) ?>
                 <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                } ?>
                </div><!--end .pvt_breadcrumbs-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p class="post_meta"><?php echo get_the_date(); ?></p>
                    <p class="pvt_post_content"><?php the_content() ?></p>
                <?php endwhile; endif; ?>
                <div id="pvt_tag">
                    <?php the_tags('Tags: ' ,' ', '<br />' ); ?>
                </div><!--end pvt_tag-->
                <div id="bv_lienquan">
                    <h2>Related posts:</h2>
                    <ul>
                     <?php
                        $id = get_the_id();
                        $terms = get_the_terms( $id, 'category' );
                        foreach($terms as $term) {
                            $cat_id = $term->term_id;
                        }
                    ?>
                    <?php 
                        global $post;
                        $args = array('numberposts'=>2, 'cat'=>$cat_id,'exclude'=> $post->ID,);
                        $random_posts = get_posts($args);
                        foreach($random_posts as $post) : setup_postdata($post); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; wp_reset_query();?>
                    </ul>
                </div><!--end bv_lienquan-->
            </article>
        </div><!--end main_right-->
    </div><!--end .container-->
</section>
<?php get_footer(); ?>