<a href="<?php echo esc_url(get_permalink()) ?>" target="_self" class="col-12 col-sm-8 col-md-6 col-lg-4 case">
    <div class="case__wrap">
        <div class="case__img">
            <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="">
        </div>
        <div class="case__title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="case__desc">
            <?php echo get_the_excerpt(); ?>
        </div>
        <div class="case__tags">
            <?php
            $post_tags = get_the_tags();
            if (!empty($post_tags)) {
                echo '<ul>';
                foreach ($post_tags as $post_tag) {
                    echo '<li>' . $post_tag->name . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</a>