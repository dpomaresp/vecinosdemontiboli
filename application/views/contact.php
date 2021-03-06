<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asociación Vecinos de Montíboli - Contacto</title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"></meta>
    <link rel="shortcut icon" href="/images/icons/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">

    <meta name="description" content="Formulario, mapa y datos de contacto del presidente de la Asociación 
    de Vecinos de Montíboli. Utiliza el formulario para realizar cualquier consulta o sugerencia." >
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
                <li><a href="/news/">Noticias</a></li>
                <li class="current"><a href="">Contacto</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
         
        <hr>
    </div>
  <!--==============================content================================-->
        <div class="main-content">
            <h2>Formulario de contacto</h2>
            <div class="fleft">
            	<div class="">
            	    <?php echo validation_errors(); ?>
            	    
                    <form id="form" method="post" action="/contact/submit">
                      <fieldset>
                        <label><strong>Nombre:</strong><input autofocus="true" class="field" name="nombre" type="text" value="<? echo set_value('nombre')?>"></label>
                        <label><strong>Email:</strong><input class="field" name="email" type="text" value="<? echo set_value('email')?>"></label>
                        <label><strong>Teléfono:</strong><input class="field" name="telefono" type="text" value="<? echo set_value('telefono')?>"></label>
                        <label><strong>Mensaje:</strong><textarea name="mensaje" ><? echo set_value('mensaje')?></textarea></label>
                        <input class="button" type="submit" value="Enviar" >
                        
                      </fieldset>  
                    </form> 
                </div>
            </div>
            <div class="map_column">
                <div class="map" id="map-canvas">
                </div>
                <div class="fleft">
                    <p>Avda. Europa 124-A, Villajoyosa (03570)</p>
                    <p>+34 607 370 030</p>
                    <p><a href="mailto:asociacion@vecinosdemontiboli.com" class="link">asociacion@vecinosdemontiboli.com</a></p>
                </dl>
                </div>
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
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        var map;
        
        function initialize() {
            var myLatlng = new google.maps.LatLng(38.4967832, -0.2681838);
            
            var mapOptions = {
            zoom: 15,
            center: myLatlng,
            disableDefaultUI: true
            };
            
            map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
              
            var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
            });
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
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