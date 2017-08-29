<?php
while (have_posts()) : the_post();
    $id = get_the_ID();
    ?>

    <div class="col-md-12">
        <?php 
        $x =  get_the_post_thumbnail($id,"large");
        echo $x;
        ?>
        <h1 class="titulo"><?php the_title(); ?></h1>
    </div>
    <div class="col-md-12">
        <?php the_content(); ?>
        <?php echo edit_post_link("editar", "<div id='edit'><div class='btn btn_success'>", "</div></div>"); ?>
    </div>
    <div class="col-md-12 rodape_Data"><?php echo get_the_date(); ?></div>
<?php endwhile; ?>