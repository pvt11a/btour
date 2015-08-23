<aside id="main_left" role="complementary">
    <h2>Most viewed</h2>
    <ul>        
        <?php
            $cf = new WP_Query(array('posts_per_page' => 6, 'meta_key' => 'post_views_count', 'orderby'=> 'meta_value_num', 'order' => 'DESC'));
            while ($cf->have_posts()) : $cf->the_post();
        ?>       
        <li>
            <a href="<?php the_permalink() ?>">
                <p><?php the_title(); ?></p>
                <?php the_post_thumbnail() ?>
            </a>
        </li>
                         
        <?php  endwhile; wp_reset_postdata();  ?>
    </ul>
</aside><!--end main_left-->
