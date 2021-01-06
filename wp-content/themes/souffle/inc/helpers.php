<?php
/**
 *  Image 
 */
function souffle_image($image_id, $image_size = 'large', $alt)
{
    $url = wp_get_attachment_image_src($image_id, $image_size)[0];
?>
    <img class="img-fluid" src="<?= $url ?>" alt="<?= $alt ?>">
<?php
}
