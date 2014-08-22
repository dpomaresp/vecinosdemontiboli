<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asociación Vecinos de Montíboli - Home</title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"></meta>
    <link rel="shortcut icon" href="/images/icons/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/slider.css">

    <meta name="description" content="Página principal donde podrás ver las últimas noticias sobre la
    Asociación de Vecinos de Montíboli junto con una serie de fotos de Montíboli." >
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
                <li class="current"><a href="">Home</a></li>
                <li><a href="/news/">Noticias</a></li>
                <li><a href="/contact/">Contacto</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
         
        <hr>
    </div>
  <!--==============================content================================-->
    <div class="main-content">
        <div id="links">
            <a href="https://drive.google.com/uc?export=download&id=0BwGO8QQgHdpjZlRuVTFmcUxpRXM" class="button fright"> Descargar estatutos </a>
        </div>
        <div class="clear"></div>
        <div class="new-content">
        <h2 class="p4">Últimas noticias</h2>
        <?php
            $this->lang->load('calendar');
            
            foreach($news as $new){

                $date = new DateTime($new->new_creation_date);

                $day = $date->format('d');
                $month = $date->format('n');
                $array = $this->lang->line('months');
                $year = $date->format('Y');
                $formated_date = $day.' de '.$array[$month-1].', '.$year;

                echo '<div class="box-piece_of_new">';
                echo '<div class="wrap">';
                echo '<p class="extra-wrap">';
                echo '<div class="new_icons">';
                echo '<span class="clr-1">'.$formated_date.'</span>';
                
                if($this->new_model->hasPictures($new->new_id)){
                    echo '<a href="'.$new->new_external_link.'" class="link fright" target="_blank"><img src="/images/icons/picture_icon.png" title="Ver fotos" /></a>';
                }
                if(!empty($new->new_external_link)){
                    echo '<a href="'.$new->new_external_link.'" class="link fright" target="_blank"><img src="/images/icons/more_icon.png" title="Seguir leyendo" /></a>';
                }
                                                
                echo '</div>';
                echo '<p class="title_piece_of_new">'.$new->new_title.'</p>'.$new->new_description.'</p>';

                echo '</div>';
                echo '</div>'; 
            }
        ?>
        </div>
        <div id="gallery" class="popup-gallery">
            <a href="/images/sliders/slider1.jpg"><img src="/images/sliders/slider1.jpg" alt="Imagen 1" /></a>
            <a href="/images/sliders/slider2.jpg"><img src="/images/sliders/slider2.jpg" alt="Imagen 2" /></a>
            <a href="/images/sliders/slider3.jpg"><img src="/images/sliders/slider3.jpg" alt="Imagen 3" /></a>
            <a href="/images/sliders/slider4.jpg"><img src="/images/sliders/slider4.jpg" alt="Imagen 4" /></a>
        </div>
        <div class="clear"></div>
    </div>       
<!--==============================footer=================================-->
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
    <script src="/js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Cargando imagen #%curr%...',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current image
                    tCounter: '%curr% de %total%'
                },
                image: {
                    tError: '<a href="%url%">No se pudo cargar la imagen #%curr%</a>.',
                    titleSrc: function(item) {
                        return '<small>by Vicent Galiana</small>';
                    }
                },
                zoom: {
                    enabled: true, // By default it's false, so don't forget to enable it
                    duration: 300
                }
            });
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
</body>
</html>