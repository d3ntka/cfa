<?php

if (is_home()) {
    $page_title = get_the_title(get_option('page_for_posts', true));
} else {
    $page_title = get_the_title();
}
?>

<div class="page-header page-header-bg">
    <div class="aux-header aux-header__page"></div>
    <a href="<?php echo site_url(); ?>" class="back-to-main">
        <?php _e("Wróć do głównej", "cfa"); ?>
    </a>
    <div class="title">
        <h1><?php echo $page_title; ?></h1>
    </div>
</div>