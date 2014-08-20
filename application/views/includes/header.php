<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $header_title; ?></title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"></meta>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/slider.css">
    <?php  
        if(!empty($stylesheets)){
            foreach($stylesheets as $stylesheet){
                echo '<link rel="stylesheet" type="text/css" media="screen" href="/css/'.$stylesheet.'.css">';
            }
        }
    ?>
</head>
<body>
  <!--==============================header=================================-->
    <header>
        <h2>
            Asociación Vecinos de Montíboli
        </h2>
    </header>
     <div id="header">
        <nav>  
            <ul class="menu">
                <?php
                    if($current_page == 'Home') {
                        echo '<li class="current"><a href="">Home</a></li>';
                    }
                    else{
                        echo '<li><a href="/">Home</a></li>';   
                    }

                    if($current_page == 'News') {
                        echo '<li class="current"><a href="">Noticias</a></li>';
                    }
                    else{
                        echo '<li><a href="/news/">Noticias</a></li>';   
                    }

                    if($current_page == 'Contact') {
                        echo '<li class="current"><a href="">Contacto</a></li>';
                    }
                    else{
                        echo '<li><a href="/contact/">Contacto</a></li>';   
                    }
                ?>
            </ul>
            <div class="clear"></div>
        </nav>
         
        <hr>
    </div>