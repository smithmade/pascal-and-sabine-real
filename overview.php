<!DOCTYPE html>
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
        <link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico"> 
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="about overview">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="wrapper">
            <div class="container">

                <?php include 'nav.php'; ?>
                    <div class="mobile arrow">
                        &nbsp;
                    </div>
                    <div class="mobile dropdown">
                        <div class="mobile nav">
                            <a href="menu.php"><img src="images/menu-dark-green.svg"></a><br>
                            <a href="overview.php"><img src="images/about-dark-green.svg"></a><br>
                            <a class="nav-res" href="reservations.php"><img src="images/reservations-dark-green.svg"></a><br>
                            <a href="gallery.php"><img src="images/gallery-dark-green.svg"></a>
                        </div>
                    </div>

                <div class="sub-nav">
                    <div>
                        <a class="active" href="overview.php">overview</a> 
                    </div>
                    <div>
                        <a href="questions.php">questions</a>
                    </div>
                </div>

                <div class="overview-content">
                    <div class="overview-image">
                        <img src="images/giant-p.png">                        
                    </div>
                    <div class="overview-copy">
                        <p>
                            <span>PASCAL &amp; SABINE</span> is a fresh take on the European brasserie, where good, 
                            simple food, strong drink, and those passing through come together to 
                            create a rich, sensory experience of precocious exuberance. Taking cues from 
                            Albert Lamorisse’s signature work, The Red Balloon, Pascal &amp; Sabine embraces 
                            the flight of fancy and ephemeral nature of an inflated balloon, adding its own 
                            unique touch of playfulness within its doors. Featuring cave-like banquettes, a 
                            hidden bakery bar and the highly-regarded artwork of Paolo Ventura, Pascal &amp; 
                            Sabine is a white string to hold onto, pulling you above the monotony of the world.
                        </p>
                    </div>
                </div>

                <?php include 'footer.php'; ?>

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
