<!-- Block - text + image -->

<?php
$id = 'text-image-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

$className = 'text-image';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// if (!empty($block['align'])) {
//     $layout .= $block['align'];
// }

$width_mod = "xl";

$container = 'container';
$colText = 'col-12 col-' . $width_mod . '-6';
$colImage = 'col-12 col-' . $width_mod . '-6';


$textPlaceholder = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut velit veniam culpa. Facere fugiat nam totam pariatur natus possimus labore rem! Optio quia est consequuntur, itaque natus debitis eius.';

$gb_text_image_txt = get_field('gb_text_image_txt') ?: $textPlaceholder;
$gb_text_image_img = get_field('gb_text_image_img');
// print_r($gb_text_image_img);
$gb_text_image_bg_color = get_field('gb_text_image_bg_color');
$gb_text_image_align = get_field( 'gb_text_image_align' )?: "0";
$gb_text_image_order = get_field( 'gb_text_image_order' );

$colOrder = 'order-' . $width_mod . '-' . $gb_text_image_order;


// include (locate_template('/template-parts/aos/aos.php', false, true));
$fadeText = $aosFadeLeft;
if ($gb_text_image_order == "2") {
    $fadeText = $aosFadeRight;
}
?>



<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="text-image__content">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="row justify-content-center justify-content-lg-between align-items-<?=$gb_text_image_align?>">
                <div class="text-image__img mb-4 mb-lg-0 <?=$colImage?> <?=$colOrder?>">
                    <img class="" src="<?php echo esc_url($gb_text_image_img['sizes']['text_image']); ?>" alt="<?php echo esc_attr($gb_text_image_img['alt']); ?>" />
                </div>
                <div class="text-image__txt <?=$colText?> list order-lg-1" <?=$fadeText?>>
                    <?php echo $gb_text_image_txt?>
                </div>
            </div>
        </div>
    </div>


    <style>
        #<?php echo esc_attr($id); ?> {
            background-color: <?php esc_html_e($gb_text_image_bg_color); ?>;
        }
    </style>
</div>