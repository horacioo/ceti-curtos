<?php


add_shortcode("NoticiasThumb", anuncio);

function anuncio($atts, $content = "") {
    $post = get_post($atts['id']);
    $thumb = get_the_post_thumbnail($atts['id'], 'thumbnail');
    
    $retorno = "<div class='NoticiasThumb'>teste</div>";
    return $retorno;
}

add_shortcode("teste", teste);
function teste(){
    return "teste de shortcode apenas";
}