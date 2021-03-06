<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asociación Vecinos de Montíboli - Noticias</title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"></meta>
    <link rel="shortcut icon" href="/images/icons/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery-ui.min.css">

    <meta name="description" content="Listado de las noticias relacionadas con la Asociación de Vecinos de Montíboli. Puedes encontrar
    una corta descripción y si existe, un enlace a la fuente original." >
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
                <li><a href="/">Home</a></li>
                <li class="current"><a href="">Noticias</a></li>
                <li><a href="/contact/">Contacto</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
        <hr>
    </div>
  <!--==============================content================================-->
    <div class="main-content">
        <div class="new-content">
        <h2 class="p4">Listado de noticias</h2>
        <div id="filters">
            <form method="post" action="/news/page/">
                <label for="starting_date">Desde</label><input type="text" class="datepicker" readonly id="starting_date" name="starting_date" value="<?php echo $from_date; ?>" />
                <label for="ending_date">Hasta</label><input type="text" class="datepicker" readonly id="ending_date" name="ending_date" value="<?php echo $to_date; ?>" />
                <input type="submit" text="Buscar" />
            </form>
        </div>
        <?php
            $this->lang->load('calendar');
            $array = $this->lang->line('months');

            foreach($news as $new) {

                $date = new DateTime($new->new_creation_date);

                $day = $date->format('d');
                $month = $date->format('n');
                $year = $date->format('Y');
                $formated_date = $day.' de '.$array[$month-1].', '.$year;
                
                echo '<div class="box-piece_of_new">';
                echo '<div class="wrap">';
                echo '<p class="extra-wrap">';
                echo '<div class="new_icons">';
                echo '<span class="clr-1">'.$formated_date.'</span>';
                
                if($this->new_model->hasPictures($new->new_id)){
                    echo '<a href="'.$new->new_external_link.'" class="link fright"><img src="/images/icons/picture_icon.png" title="Ver fotos" /></a>';
                }
                if(!empty($new->new_external_link)){
                    echo '<a href="'.$new->new_external_link.'" class="link fright"><img src="/images/icons/more_icon.png" title="Seguir leyendo" /></a>';
                }
                                                
                echo '</div>';
                echo '<p class="title_piece_of_new">'.$new->new_title.'</p>'.$new->new_description.'</p>';

                echo '</div>';
                echo '</div>';
            }
        ?>
        </div>
    </div>
    <footer>
        <hr>
        <div>
            <a href="http://www.facebook.com/profile.php?id=100006764388620" target="_blank"><img class="social" src="/images/icons/facebook_icon.png" alt="Facebook" /></a>
            <a href="http://www.twitter.com/lavilamontiboli" target="_blank"><img class="social" src="/images/icons/twitter_icon.png" alt="Twitter" /></a>
        </div>
        <div class="fright">
            <p>© 2014 Asociación Vecinos de Montíboli<br>
                by dpe
            </p>
        </div>
    </footer>
</body>
    <script src="/js/jquery-1.7.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(".datepicker").datepicker({
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            dayNamesShort: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
    'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct',
    'Nov', 'Dic'],
            firstDay: 1,
            nextText: 'Siguiente',
            prevText: 'Anterior',
            dateFormat: 'yy-mm-dd'
        });
    </script>
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</html>