<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asociación Vecinos Montiboli - Home</title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/slider.css">
</head>
<body>
  <!--==============================header=================================-->
    <header>
        <h2>
            Asociacion de Vecinos de Montiboli
        </h2>
    </header>
     <div id="header">
        <nav>  
            <ul class="menu">
                <li class="current"><a href="">Home</a></li>
                <li><a >Noticias</a></li>
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
            <h2 class="p4">Ultimas noticias</h2>
            <?php
                $this->lang->load('calendar');
                
                foreach($news as $new){
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
        <div class="clear"></div>
    </div>       
<!--==============================footer=================================-->
    <footer>
        <hr>
        <div class="fright">
        	<p>© 2014 Asociación Vecinos de Montiboli<br>
         		<a rel="nofollow" href="http://www.templatemonster.com/" target="_blank" class="link">
         	    Template by TemplateMonster.com
         		</a>
            </p>
 		</div>
    </footer>
    </body>
    <script src="/js/jquery-1.7.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/tms-0.4.1.js"></script>
    <script src="/js/cufon-yui.js"></script>
    <script src="/js/cufon-replace.js"></script>
    <script src="/js/Kozuka_L_300.font.js"></script>
    <script src="/js/Kozuka_B_700.font.js"></script>
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