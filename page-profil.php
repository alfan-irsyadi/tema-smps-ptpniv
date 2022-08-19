<?php
get_header(2);
$args = ['post_type'=>'post', 'orderby'=>'ID','post_status'=>'publish','order'=>'DESC', 'posts_per_page'=>-1];
$res = new WP_Query($args);
?>
<div id="ttr_content" class="ttr_content">        
        <div class="row">
            <?php
            if ($res->have_posts()) :
                while ($res->have_posts()) :
                    $res->the_post();
                    
                    $cat_name =  get_the_category(get_the_ID())[0]->name;
                    if ($cat_name == "profil") :                    
            ?>
                        <div id="<?= get_post_field('post_name', get_post())?>" class="artikel" onclick="location.href='<?= get_permalink() ?>'" style="cursor:pointer">
                            <h2><?php the_title(); ?></h2>
                            
                            <!-- <span class="posted-on"><?php the_time('j F Y') ?></span> -->
                            <!-- <p><?php the_excerpt(); ?></p> -->
                            <p><?php the_content(__('(more...)')); ?></p>
                        </div>
                <?php
                    endif;
                endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>