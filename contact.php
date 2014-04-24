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
        <link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico"> 
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="contact">
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
                            <a href="contact.php"><img src="images/contact-dark-green.svg"></a><br>
                            <a href="gallery.php"><img src="images/gallery-dark-green.svg"></a>
                        </div>
                    </div>


                <div class="phone-number">
                    <a href="tel:7327743395"><img src="images/phone1.png"> <img src="images/phone2.png"> <br class="mobile"> <img src="images/phone3.png"></a>
                </div>

                <div class="reservations">
                    <div class="reservation-header">
                        <img src="images/reservation-header.png">
                    </div>
                    <script type="text/javascript" src="http://www.opentable.com/frontdoor/default.aspx?rid=139165&restref=139165&mode=wide"></script>
                <!--    <a class="OT_ExtLink" href="http://www.opentable.com/single.aspx?rid=139165&restref=139165">Pascal &amp; Sabine Reservations</a>    -->
                </div>

                <div class="contact-info">
                    <div class="hidden-mobile">
                        <section class="open">
                            <p>
                                monday — thursday <br>
                                11:00 am — 12:00 am  <br><br>

                                friday <br>
                                11:00 am — 2:00 am
                            </p>
                        </section>
                    </div>
                    <div>
                        <section>
                            <span class="hyphen">&nbsp;</span><span class="address-header">601</span><span class="hyphen">&nbsp;</span> <br>
                            <span class="bangs-ave">bangs avenue</span> <br>
                            <span class="asbury-park">asbury park, nj 07712</span> <br>
                            <a class="email" href="mailto:info@pascalandsabine.com">info@pascalandsabine.com</a>
                        </section>
                        
                    </div>
                    <section class="hidden-desktop">
                        <div>
                            <p>
                                monday — thursday <br>
                                11:00 am — 12:00 am  <br><br>

                                friday <br>
                                11:00 am — 2:00 am
                            </p>
                        </div>
                    </section>
                    <div>
                        <section class="open">
                            <p>
                                saturday <br>
                                11:00 am — 2:00 am <br><br>

                                sunday <br>
                                11:00 am — 12:00 am
                            </p>
                        </section>
                    </div>
                </div>
                <div class="temp-hours">
                    <div>
                        monday — thursday
                        <span>5:00 pm — 12:00 am</span>
                    </div>
                    <div>
                        friday
                        <span>5:00 pm — 2:00 am</span>
                    </div>

                    <div>
                        saturday
                        <span>8:00 am — 2:00 am</span>
                    </div>

                    <div>
                        sunday
                        <span>8:00 am — 12:00 am</span>
                    </div>


                </div>

                <div class="valet">
                    complimentary valet parking during friday &amp; saturday dinner service
                </div>

                <?php include 'footer.php'; ?>

            </div>

        </div>



        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

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
