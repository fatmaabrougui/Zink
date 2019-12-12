
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>Malek</title>

    <!-- мета-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/main.css">

    <!-- google font -->
    <link rel='stylesheet' href='views/assets/css/fonts.css'>
    
    <!-- js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.js"></script>


 
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="menu" class=" navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
               
            </div><!-- navbar-header -->

        <div id="navbar" >
          
           ></div>

            <ul class="nav navbar-nav " >
              
             
                
               


                
                
                <li <?php if(isset($_GET['page'])&&$_GET['page']=='menu') { echo "class='active'"; } ?>><a href="index.php?page=menu">MENU</a></li>
                <!--<li><a href="#special-offser">Special Offers</a></li>-->
                <li <?php if(isset($_GET['page'])&&$_GET['page']=='cart') { echo "class='active'"; } ?>style="background-color:green"><a href="index.php?page=cart"><strong>
                PANIER :</strong> &nbsp;<?= $_SESSION['sum'] ?> TND</a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <!-- /#header -->





 
    <!-- /#DEFAULT-->
    <div >
     
    
               
            
        
    </div>
   !-- #story -->


  





    <!-- /#FOOTER -->



    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
   
        <!-- /.container -->
    </footer>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
       <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</body>
</html>

    




    








    

