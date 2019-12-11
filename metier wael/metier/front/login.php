<?php     session_start(); ?>
<?php
include "../Core/Clients.php";
if(isset( $_SESSION['l']))
{
    ?>
    <script language="javascript">

        window.location.href="../views/account.php";


    </script>
    <?PHP
}
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>LOGIN</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 -->
		<script src="js/inscription.js"> </script>

<!-- 
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
			<!--
			CSS
			============================================= -->

      <!--   <link rel="stylesheet" href="css/login.css"> -->

      <link rel="stylesheet" type="text/css" href="signup.css">

		</head>
		<body>
        <?php include "header.php" ?>
			<!-- start banner Area -->

			<!-- End banner Area -->

			<!-- Start Volunteer-form Area -->
			
			
			<section class="Volunteer-form-area section-gap" style="  height: 480px;">
				<div class="container" >

                       <center><form class="form-signin" style=" height: 450px ; position: relative; right: 30px ; top: 20px" method="POST" action="../core/check_acc.php" >
                            <h2 style="color:white;"class="form-signin-heading">Connexion</h2>
                            <br>

                            <input style="width: 300px; background: white" type="text" class="form-control" name="email" placeholder="Email ou nom d'utilisateur" required="" autofocus="" />
                            <br>
                            <input  style="width: 300px; background: white"type="password" class="form-control" name="pass" placeholder="mot de passe" required=""/>
<br>
                            <button style="width: 300px;"  class="btn btn-info btn-lg" type="submit">Se connecter</button>
                            <br>
                            <br>
                            <a  href="signup.php" class="btn" style="color:white;"> <span >Pas encore membre ? </span></a><br>

                            <a  href="MDP%20oublié.php" class="btn" style="color:white;"><span> Mot de passe oublié?</span></a>
                        </form></center> 

                </div>
</section>

        
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>