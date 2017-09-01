<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"  rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!--<link href="<?php echo $url_tema; ?>/css/menu.css" rel="stylesheet" type="text/css">
<link href="<?php echo $url_tema; ?>/css/flip.css" rel="stylesheet" type="text/css">
<script src="<?php echo $url_tema; ?>/js/menu.js"></script>
<script src="<?php echo $url_tema; ?>/js/video.js"></script>-->
    </head>
    <header class="p1_header"></header>
    <body <?php body_class(); ?>>
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2"> <?php Logotipo() ?></div>
                    <div class="col-lg-7 "><?php dynamic_sidebar("centroTopo"); ?></div>
                    <div class="col-lg-3">
                        <form action="" method="GET"> 
                            <div class="input-group">
                                <input type="text" name="s" class="form-control" placeholder="Search" id="txtSearch"/>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="cor-base distancia">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12"><?php get_template_part("template_part/menu"); ?></div>
                </div>
            </div>
        </div>