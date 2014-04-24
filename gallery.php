<!DOCTYPE html>

<!--

MADE BY
                                                                     
   _|_|_|      _|      _|      _|_|_|      _|_|_|_|_|      _|    _|  
 _|            _|_|  _|_|        _|            _|          _|    _|  
   _|_|        _|  _|  _|        _|            _|          _|_|_|_|  
       _|      _|      _|        _|            _|          _|    _|  
 _|_|_|        _|      _|      _|_|_|          _|          _|    _|  
                                                                     
                                                        ASBURY PARK                 

-->


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pascal &amp; Sabine</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="gallery">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <div class="container">

                <?php include 'nav.php'; ?>
                <div class="mobile arrow">
                    &nbsp;
                </div>
                <div class="mobile border-bottom">
                    
                </div>
                <div class="mobile dropdown">
                    <div class="mobile nav">
                        <a href="menu.php"><img src="images/menu-white.svg"></a><br>
                        <a href="overview.php"><img src="images/about-white.svg"></a><br>
                        <a class="nav-res" href="reservations.php"><img src="images/reservations-white.svg"></a><br>
                        <!--<a href="gallery.php"><img src="images/gallery-white.svg"></a>-->
                    </div>
                </div>

                <div id="slides">
                    <div class="slides-navigation">
                            <a href="#" class="next"><img src="images/arrow.svg"></a>
                            <a href="#" class="prev"><img src="images/arrow.svg"></a>
                    </div>
                    <div class="slides-container">
                        <img src="images/gallery/1.jpg" alt="">
                        <img src="images/gallery/2.jpg" alt="">
                        <img src="images/gallery/3.jpg" alt="">
                        <img src="images/gallery/4.jpg" alt="">
                        <img src="images/gallery/5.jpg" alt="">
                        <img src="images/gallery/6.jpg" alt="">
                        <img src="images/gallery/7.jpg" alt="">
                        <img src="images/gallery/8.jpg" alt="">
                        <img src="images/gallery/9.jpg" alt="">
                        <img src="images/gallery/10.jpg" alt="">
                    </div>
                </div>

                <?php include 'footer-white.php'; ?>


            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.superslides.min.js"></script>
        <script type="text/javascript">
              $('#slides').superslides({
                slide_speed: 800,
                animation_speed: 1000,
                pagination: true,
                scrollable: false,
                animation: 'fade'
              });
        </script>
        <script type="text/javascript">
        
            jQuery('.arrow').click(function() { 
            jQuery('.arrow').toggleClass("x"); 
            
            });

            jQuery('.arrow').click(function() { 
            jQuery('#slides').toggleClass("gall-mod"); 
            
            });

            jQuery('.arrow').click(function() { 
            jQuery('.slides-navigation').toggleClass("vanish"); 
            
            });


            jQuery('.arrow').click(function() { 
            jQuery('footer').toggleClass("vanish"); 
            
            });


            jQuery('.arrow').click(function() { 
            jQuery('.dropdown').toggleClass("block"); 
            
            });

        </script>
    </body>
</html>
