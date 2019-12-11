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
		<title>RESET PASSWORD</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

		<script src="js/inscription.js"> </script>


		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			

        <link rel="stylesheet" href="css/login.css">

        
		</head>
		<body>
        <?php include "header.php" ?>

			
			<section class="Volunteer-form-area section-gap" style="background-image: url(bk.jpg); height: 521px;" >
				<div class="container" >

                        <form class="form-signin" style=" height: 420px ; position: relative; top: 30px" method="POST" action="../core/Reset.php">
                            <h2 class="form-signin-heading">Veuillez saisir votre adresse mail</h2>
                            <br>

                            <input style="background: white" type="email" class="form-control" name="email" placeholder="Email " required="" autofocus="" />
                            <br>

<br>
                            <button class="btn btn-info btn-lg" type="submit">envoyer</button>
                            <br>
                            <a  href="signup.php"> <span>Pas encore membre ? </span></a>


                        </form>

                </div>


			</section>
			<!-- End Volunteer-form Area -->
																							
			<!-- start footer Area -->
        
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