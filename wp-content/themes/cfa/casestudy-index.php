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

if ($casestudy_posts) : ?>
    <section class="casestudy" id="casestudy">
        <div class="container">
            <!-- <div class="row justify-content-center"> -->
            <div class="col-xl-10 mx-auto">
                <div class="row justify-content-center">
                    <?php // The Loop
                    foreach ($casestudy_posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php echo get_template_part("components/casestudy/casestudy","small") ?>
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
