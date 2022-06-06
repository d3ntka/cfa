<?php

/**
 * Template Name: Case Study Index
 * Description: The template for displaying the Creators list.
 *
 */

get_header();
$casestudy_posts = get_field('casestudy_posts');
?>


<?php get_template_part("components/pages/page-header"); ?>

<?php

$cases = get_field('cases');

if ($cases) : ?>
    <section class="casestudy" id="casestudy">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title title-line title-line--cs">
                        <h2>
                            <?php if ($case_title = get_field('case_title')) : ?>
                                <?php echo esc_html($case_title); ?>
                            <?php endif; ?>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center"> -->
            <div class="col-xl-10 mx-auto">
                <div class="row justify-content-center">
                    <?php // The Loop
                    foreach ($cases as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4 case">
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
                                    foreach ($post_tags as $post_tag) {
                                        echo '<li>' . $post_tag->name . '</li>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- </div> -->
        </div>

    </section>
<?php
    wp_reset_postdata();
endif;
?>






<?php
get_footer();
