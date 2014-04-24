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
        <link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico"> 
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <?php
        // set default timezone
        date_default_timezone_set('America/New_York'); 
        $time = date('H'); 
        if($time >= 0 and $time < 2){ 
           include("drinks-snip.php"); 
        }else if($time >= 2 and $time < 10){ 
            include('dinner-snip-march.php'); 
        }else if($time >= 10 and $time < 16){ 
            include('lunch-snip.php'); 
        }else if($time >= 16 and $time < 22){ 
            include('dinner-snip-march.php'); 
        }else if($time >= 22 and $time < 24){ 
            include('drinks-snip.php'); 
        }else{ 
            include('dinner-snip.php'); 
        } 
    ?>



</html>
