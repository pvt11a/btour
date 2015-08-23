<?php get_header(); ?>
<section id="pvt_main">
    <div class="container">
        <?php get_sidebar() ?>
        <div id="main_right">
            <div class="pvt_breadcrumbs">
                <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                } ?>
            </div>
            <div style="text-align: center;"><?php echo get_option('pvt-ga'); ?></div>
            <h2 id="cat_tit">New posts in <?php single_cat_title(); ?></h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <p><p><?php the_content_rss('',true,'',30); ?></p></p>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                <p class="post_meta"><?php echo get_the_date(); ?></p>
            </article>
           <?php endwhile; endif; ?>
           <?php wp_pagenavi() ?>
           <div style="text-align: center;"><?php echo get_option('pvt-ga'); ?></div>
        </div><!--end main_right-->
    </div><!--end .container-->
</section>
<?php get_footer(); ?>