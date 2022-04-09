<?php

// ------------Meta---------------

$nick = get_the_title();
$name = get_field( 'name' ); //Imię i nazwisko
$desc = get_field( 'description' ); //Opis
$img = get_the_post_thumbnail_url();


// ---------------Socials---------------

$twitter_url = get_field( 'twitter_url' );
$twitter_count = get_field( 'twitter_count' );
$twitter_show = get_field( 'twitter_show' );
$twitch_url = get_field( 'twitch_url' );
$twitch_count = get_field( 'twitch_count' );
$twitch_show = get_field( 'twitch_show' );
$facebook_url = get_field( 'facebook_url' );
$facebook_count = get_field( 'facebook_count' );
$facebook_show = get_field( 'facebook_show' );
$instagram_url = get_field( 'instagram_url' );
$instagram_count = get_field( 'instagram_count' );
$instagram_show = get_field( 'instagram_show' );
$tiktok_url = get_field( 'tiktok_url' );
$tiktok_count = get_field( 'tiktok_count' );
$tiktok_show = get_field( 'tiktok_show' );
$youtube_url = get_field( 'youtube_url' );
$youtube_count = get_field( 'youtube_count' );
$youtube_show = get_field( 'youtube_show' );
?>