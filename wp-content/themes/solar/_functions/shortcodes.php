<?php


add_shortcode('citacao', 'spa_citacao');
function spa_citacao($atts, $content = null) {

    $output = "<div class='citacao'>";
    $output .= do_shortcode($content);
    $output .= "</div>";

    return $output;
}
?>