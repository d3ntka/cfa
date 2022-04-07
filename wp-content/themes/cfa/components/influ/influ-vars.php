<?php

// ------------Meta---------------

$nick = get_the_title();
$name = get_field( 'name' ); //Imię i nazwisko
$desc = get_field( 'description' ); //Opis
$img = get_the_post_thumbnail_url();


// ---------------Socials---------------

$twitter_url = get_field( 'twitter_url' );
$twitter_count = get_field( 'twitter_count' );
$twitch_url = get_field( 'twitch_url' );
$twitch_count = get_field( 'twitch_count' );
$facebook_url = get_field( 'facebook_url' );
$facebook_count = get_field( 'facebook_count' );
$instagram_url = get_field( 'instagram_url' );
$instagram_count = get_field( 'instagram_count' );
$tiktok_url = get_field( 'tiktok_url' );
$tiktok_count = get_field( 'tiktok_count' );
$youtube_url = get_field( 'youtube_url' );
$youtube_count = get_field( 'youtube_count' );
?>