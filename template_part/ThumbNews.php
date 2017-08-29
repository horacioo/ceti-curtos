<?php
$linha = 0;
$args = array('post_type' => 'post', 'post_parent' => "0", "posts_per_page" => "3", 'orderby' => 'date');
$my_posts = get_posts($args);
foreach ($my_posts as $post): setup_postdata($post);
    $linha++;
    $data = get_the_date();
    $titulo = get_the_title();
    $resumo = get_the_excerpt();
    $id = get_the_ID();
    $categories = get_the_category($id);
    $thumb = get_the_post_thumbnail($id, $size = 'thumbnail', array("class" => "img-responsive")/* , array("class" => "img-responsive") */); //
    $categoria = (array) $categories[0];
    $_SESSION["dados"] = $dados;
    ?>
    <div class="col-md-4">
        <div class="thumb">
            <p><?php echo $titulo; ?></p>
            <?php echo $thumb; ?>
        </div>
        <div class="resumo"><?php echo $resumo;?></div>
        <a href="<?php echo get_permalink();?>" class="btn">mais detalhes</a>
    </div>    
    <?php
endforeach;
?>
</div>