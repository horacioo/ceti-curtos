<?php
add_action('add_meta_boxes', 'MetaBoxeRedesSociais');

function MetaBoxeRedesSociais() {
    add_meta_box(
            'link', //ID
            'codigo para inserir a noticia', //Título
            'link_para_a_noticia', //callback
            array('page','post'), //Post Type
            'side', //Posição
            'high' //Prioridade
    );
}

function link_para_a_noticia() {
    global $post;
    ?>
    <input type="text" style="width: 100%" value="[NoticiasThumb id='<?php echo $post->ID ?>']"> 
    <?php
}
