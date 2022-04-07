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

<div class="container-wide influ-full">
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
                        <div class="data">
                            <div class="name">
                                <?=$name;?>
                            </div>
                            <div class="nick">
                                <?=$nick;?>
                            </div>
                            <div class="desc">
                                <?=$desc;?>
                            </div>
                        </div>

                        <?php if ($twitter_count): ?>
                            <a href="<?=$twitter_url;?>" class="social-btn bg twitter">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">
                                    <div class="count">
                                        <?=$twitter_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("odbiorców","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($twitch_count): ?>
                            <a href="<?=$twitch_url;?>" class="social-btn bg twitch">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$twitch_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("oglądających","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($facebook_count): ?>
                            <a href="<?=$facebook_url;?>" class="social-btn bg facebook">
                                <div class="social-btn-icon bg"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$facebook_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("polubień","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($instagram_count): ?>
                            <a href="<?=$instagram_url;?>" class="social-btn bg instagram">
                                <div class="social-btn-icon"></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$instagram_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("fapaczy","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($tiktok_count): ?>
                            <a href="<?=$tiktok_url;?>" class="social-btn bg tiktok">
                                <div class="social-btn-icon "></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$tiktok_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("cringo","cfa-t") ;?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($youtube_count): ?>
                            <a href="<?=$youtube_url;?>" class="social-btn bg youtube">
                                <div class="social-btn-icon "></div>
                                <div class="count__wrap">  
                                    <div class="count">
                                        <?=$youtube_count;?>
                                    </div>
                                    <div class="count__name">
                                        <?php _e("Paczajsów","cfa-t") ;?>
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
