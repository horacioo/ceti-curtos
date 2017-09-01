<?php
add_shortcode("NoticiasThumb", thumb);
function thumb($atts, $content = "") {
    $post = get_post($atts['id']);
    $thumb = get_the_post_thumbnail($atts['id'], 'thumbnail');
    $link = get_permalink($atts['id']);
    $retorno="";
        $retorno.= "<div class='col-sm-4 link'>";
            $retorno.="<div class='exibe'>";
                $retorno.="<a href='$link'>".$thumb."</a>";
                $retorno.= "<p><a href='$link'>".$post->post_title."</a></p>";
            $retorno.="</div>";
        $retorno.= "<p><a href='$link'>".substr($post->post_excerpt, 0, 40)."</a></p>";    
        $retorno.="</div>";
    return $retorno;
}
