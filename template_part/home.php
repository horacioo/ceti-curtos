<section class="container"> 
    
    <div class="row">
        <div class="col-lg-12">
            <?php dynamic_sidebar('centroHome'); ?>
        </div>
    </div>

    <div class="row">
        <div class="distancia">
            <div class="col-lg-8"><?php get_template_part("template_part/ThumbNews"); ?></div>
            <div class="col-lg-4 widget">
                <?php dynamic_sidebar("lateralHome"); ?>
            </div>
        </div>
    </div>
</section>
<hr class="hr">
<div class="container">
    <div class="Parte_de_baixo_home">
        <?php dynamic_sidebar('Parte_de_baixo_home'); ?>
    </div>
</div>
