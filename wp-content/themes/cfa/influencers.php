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
                            <a target="_blank" href="<?=$twitter_url;?>" class="social-btn bg twitter">
                                <div class="social-btn-icon bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.922" height="16.231" viewBox="0 0 19.922 16.231">
                                        <path id="Path_233" data-name="Path 233" d="M6.583,214.291H5.917a.846.846,0,0,0-.095-.013,10.783,10.783,0,0,1-1.23-.107,11.548,11.548,0,0,1-4.525-1.653c-.023-.015-.045-.033-.067-.049l.005-.018a8.242,8.242,0,0,0,3.157-.254,7.938,7.938,0,0,0,2.819-1.433,4.384,4.384,0,0,1-1.618-.4,4.19,4.19,0,0,1-1.338-1,3.547,3.547,0,0,1-.8-1.458,3.87,3.87,0,0,0,1.761-.073,4.279,4.279,0,0,1-1.67-.805,4.055,4.055,0,0,1-1.15-1.438,3.783,3.783,0,0,1-.386-1.8,5.369,5.369,0,0,0,.868.338,3.374,3.374,0,0,0,.922.135A4.107,4.107,0,0,1,.9,201.782a4.063,4.063,0,0,1,.45-2.976,11.69,11.69,0,0,0,3.765,3.037,11.55,11.55,0,0,0,4.669,1.245c-.007-.049-.01-.08-.016-.111a3.963,3.963,0,0,1,.187-2.274,4.029,4.029,0,0,1,3.183-2.592c.123-.023.248-.034.372-.051h.561c.144.02.289.036.433.062a4.035,4.035,0,0,1,2.2,1.156.163.163,0,0,0,.177.054c.175-.047.353-.083.527-.131a8.128,8.128,0,0,0,1.847-.771c.031-.017.064-.03.1-.045l.016.021a4.176,4.176,0,0,1-1.728,2.2.182.182,0,0,0,.069,0,8.123,8.123,0,0,0,1.911-.5l.31-.121v.018c-.021.024-.043.047-.061.073a8.263,8.263,0,0,1-1.883,1.951.2.2,0,0,0-.092.19,11.439,11.439,0,0,1-.09,1.879,12.168,12.168,0,0,1-3.552,7.067,10.85,10.85,0,0,1-1.961,1.507,11.382,11.382,0,0,1-5.525,1.6c-.058,0-.116.01-.174.015" transform="translate(0 -198.06)" fill="#fff"/>
                                    </svg>
                                </div>
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
                            <a target="_blank" href="<?=$twitch_url;?>" class="social-btn bg twitch">
                                <div class="social-btn-icon bg">
                                <svg id="Group_341" data-name="Group 341" xmlns="http://www.w3.org/2000/svg" width="21.143" height="24.093" viewBox="0 0 21.143 24.093">
                                    <path id="Path_5935" data-name="Path 5935" d="M2.951,1.967H19.177V12.784l-3.443,3.442H10.326l-2.95,2.95v-2.95H2.951ZM.983,0,0,3.934v17.7H4.426v2.459H6.884l2.459-2.459h3.933l7.867-7.866V0Z" fill="#fff"/>
                                    <path id="Path_5936" data-name="Path 5936" d="M44.2,37.1h1.967v-5.9H44.2Zm5.408,0h1.967v-5.9H49.605Z" transform="translate(-35.838 -25.294)" fill="#fff"/>
                                </svg>

                                </div>
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
                            <a target="_blank" href="<?=$facebook_url;?>" class="social-btn bg facebook">
                                <div class="social-btn-icon bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.828" height="18.899" viewBox="0 0 9.828 18.899">
                                        <path id="Path_5937" data-name="Path 5937" d="M541.606,203.779h-3.479c0-.05-.009-.1-.009-.151q0-4.164,0-8.328v-.148h-2.905v-3.365h2.905v-.14c0-.812,0-1.624,0-2.435a5.227,5.227,0,0,1,.307-1.8,3.636,3.636,0,0,1,1.855-2.085,4.444,4.444,0,0,1,1.968-.452c.734,0,1.469.036,2.2.062.2.007.394.036.589.055v3.027H544.9c-.536,0-1.073-.006-1.609,0a3.784,3.784,0,0,0-.689.068,1.1,1.1,0,0,0-.932.933,3.538,3.538,0,0,0-.055.615c-.007.674,0,1.348,0,2.022v.13h3.321l-.436,3.365h-2.885v.152q0,4.158,0,8.317c0,.05-.006.1-.009.151" transform="translate(-535.213 -184.88)" fill="#fff"/>
                                    </svg>
                                </div>
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
                            <a target="_blank" href="<?=$instagram_url;?>" class="social-btn bg instagram">
                                <div class="social-btn-icon">
                                    <svg id="Group_297" data-name="Group 297" xmlns="http://www.w3.org/2000/svg" width="17.407" height="17.407" viewBox="0 0 17.407 17.407">
                                        <path id="Path_5710" data-name="Path 5710" d="M4386.435,237.452a6.391,6.391,0,0,0-.4-2.113,4.451,4.451,0,0,0-2.545-2.545,6.391,6.391,0,0,0-2.113-.4c-.928-.042-1.225-.052-3.588-.052s-2.66.01-3.588.052a6.388,6.388,0,0,0-2.113.4,4.451,4.451,0,0,0-2.545,2.545,6.389,6.389,0,0,0-.4,2.113c-.042.928-.052,1.225-.052,3.588s.01,2.66.052,3.588a6.39,6.39,0,0,0,.4,2.113,4.451,4.451,0,0,0,2.545,2.545,6.391,6.391,0,0,0,2.113.4c.928.042,1.225.052,3.588.052s2.66-.01,3.588-.052a6.394,6.394,0,0,0,2.113-.4,4.451,4.451,0,0,0,2.545-2.545,6.391,6.391,0,0,0,.4-2.113c.042-.928.053-1.225.053-3.588s-.01-2.66-.053-3.588m-8.651,8.058a4.469,4.469,0,1,1,4.469-4.469,4.47,4.47,0,0,1-4.469,4.469m4.646-8.071a1.044,1.044,0,1,1,1.044-1.044,1.044,1.044,0,0,1-1.044,1.044" transform="translate(-4369.08 -232.337)" fill="#fff"/>
                                        <path id="Path_5711" data-name="Path 5711" d="M4431.8,292.162a2.9,2.9,0,1,0,2.9,2.9,2.9,2.9,0,0,0-2.9-2.9" transform="translate(-4423.102 -286.36)" fill="#fff"/>
                                    </svg>
                                </div>
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
                            <a target="_blank" href="<?=$tiktok_url;?>" class="social-btn bg tiktok">
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
                            <a target="_blank" href="<?=$youtube_url;?>" class="social-btn bg youtube">
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
