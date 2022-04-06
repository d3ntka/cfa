<?php
/**
 * Template Name: Creators
 * Description: The template for displaying the Creators list.
 *
 */

get_header();
$posts = get_field( 'influ' );
?>


<?php get_template_part("components/pages/page-header"); ?>

<div class="influ-full">
    <div class="influ-full__grid">
        <?php
        if ( $posts ) : ?>
            <?php foreach( $posts as $post) : ?>
                <?php setup_postdata( $post ); ?>
                <?php include(locate_template("components/influ/influ-vars.php"));?>
                <div class="influ-full__cont">
                    <div class="img">
                        <img src="<?=$img;?>" alt="photo of <?=$nick;?>">
                    </div>
                    <div class="meta">
                        <div class="name">
                            <?=$name;?>
                        </div>
                        <div class="nick">
                            <?=$nick;?>
                        </div>
                        <div class="desc">
                            <?=$desc;?>
                        </div>
    
                        <?php if ($twitter_url): ?>
                            <a href="<?=$twitter_url;?>" class="social-btn twitter">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">
                                    <div class="count">
                                        <?=$twitter_count;?>
                                    </div>
                                    <div class="count__viewers">
                                        <?php _e("odbiorców","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($twitch_url): ?>
                            <a href="<?=$twitch_url;?>" class="social-btn twitch">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$twitch_count;?>
                                    </div>
                                    <div class="count__viewers">
                                        <?php _e("oglądających","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($facebook_url): ?>
                            <a href="<?=$facebook_url;?>" class="social-btn facebook">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$facebook_count;?>
                                    </div>
                                    <div class="count__viewers">
                                        <?php _e("polubień","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($instagram_url): ?>
                            <a href="<?=$instagram_url;?>" class="social-btn instagram">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$instagram_count;?>
                                    </div>
                                    <div class="count__viewers">
                                        <?php _e("fapaczy","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>

                    </div>

                </div>
        
        
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>


</div>





<?php
get_footer();
