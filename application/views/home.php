    <div class="main-content">
        <div id="links">
            <a href="https://drive.google.com/uc?export=download&id=0BwGO8QQgHdpjZlRuVTFmcUxpRXM" class="button fright"> Descargar estatutos </a>
        </div>
        <div class="clear"></div>
        <div class="new-content">
        <h2 class="p4">Últimas noticias</h2>
        <?php
            $this->lang->load('calendar');
            
            foreach($data_content['news'] as $new) {

                $date = new DateTime($new->new_creation_date);

                $day = $date->format('d');
                $month = $date->format('n');
                $array = $this->lang->line('months');
                $year = $date->format('Y');
                $formated_date = $day.' de '.$array[$month-1].', '.$year;

                echo '<div class="wrap">';
                echo '<p class="extra-wrap"><span class="clr-1">'.$formated_date.'</span><br>';
                // echo '<a href="/new/'.$new->new_id.'" class="link">'.$new->new_title.'</a><br>'.$new->new_description.'</p>'; //1 de Agosto, 2014
                echo '<a href="" class="link">'.$new->new_title.'</a><br>'.$new->new_description.'</p>'; //1 de Agosto, 2014
                echo '</div>';
                echo '<br/><br/>';    
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
    <?php echo $footer; ?>
</body>
    <script src="/js/jquery-1.7.min.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Cargando...',
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
</html>    