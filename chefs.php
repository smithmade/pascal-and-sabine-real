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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="about chefs">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="wrapper">
            <div class="container">

                <div class="chefs-photo">
                    <div class="chefs-header">
                        <img src="images/executive-chef.png">
                    </div>
                </div>
                
                <div class="chefs-copy">
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer 
                            molestie ligula id nisl ornare, a convallis enim semper. Vestibulum 
                            eget accumsan sapien, nec mollis purus. Integer pharetra auctor erat, 
                            sed ultrices turpis iaculis sed. In sollicitudin feugiat faucibus. 
                            Nunc augue eros, sollicitudin at justo sit amet, sollicitudin vehicula 
                            ante. Nulla convallis ante vitae nisi tempor pharetra. Aliquam id 
                            pellentesque enim. Sed consequat viverra tellus non dictum. Praesent 
                            rhoncus leo id tincidunt euismod. Aenean porta venen atis enim non 
                            consectetur. Etiam lobortis enim sollicitudin dolor placerat varius. 
                            Quisque ac tempor turpis. Mauris facilisis sapien neque, id ornare 
                            nisi egestas&nbsp;eleifend.
                        </p>
                        <p>
                            Vestibulum diam sapien, egestas ut bibendum sit amet, auctor a odio. 
                            Cras in sagittis lorem. Cum sociis natoque penatibus et magnis dis 
                            parturient montes, nascetur ridiculus mus. Ut et accumsan neque. 
                            Vestibulum condimentum, nunc nec lacinia ultrices, ipsum erat aliquet 
                            nisl, ac commodo nibh est id leo. Proin fermentum, justo et dapibus 
                            consequat, massa arcu mollis tortor, sed venenatis magna mi sit amet 
                            libero. Fusce non risus feugiat, sagittis diam eget, imperdiet diam. 
                            Praesent rhoncus eget diam pellentesque&nbsp;cursus.
                        </p>
                    </div>
                </div>

                <div class="nav-container">

                    <?php include 'nav.php'; ?>
                    <div class="mobile arrow">
                        &nbsp;
                    </div>
                    <div class="mobile dropdown">
                        <div class="mobile nav">
                            <a href="menu.php"><img src="images/menu-light-blue.svg"></a><br>
                            <a href="overview.php"><img src="images/about-light-blue.svg"></a><br>
                            <a href="contact.php"><img src="images/contact-light-blue.svg"></a><br>
                            <a href="gallery.php"><img src="images/gallery-light-blue.svg"></a>
                        </div>
                    </div>

                    <div class="sub-nav">
                        <div>
                            <a class="active" href="chefs.php">chefs</a> 
                        </div>
                        <div>
                            <a href="overview.php">overview</a> 
                        </div>
                        <div>
                            <a href="questions.php">questions</a>
                        </div>
                    </div>
                    
                </div>

                <div class="footer-wrapper">
                    <?php include 'footer-black.php'; ?>                    
                </div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
        jQuery('.arrow').click(function() { 
        jQuery('.arrow').toggleClass("x"); 
        
        });

        jQuery('.arrow').click(function() { 
        jQuery('.dropdown').toggleClass("block"); 
        
        });

        </script>
    </body>
</html>
