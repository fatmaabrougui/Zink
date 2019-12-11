<?PHP
session_start();
include "../entites/client.php";
include "../Core/Clients.php";
$client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);
foreach($info as $row) {

?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/modifierProfil.js"> </script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="css/profil.css">
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
		<title>compte</title>

		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
        <script src="js/modifierProfil.js"> </script>

<link rel="stylesheet" type="text/css" href="signup.css">

	<!-- 	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
			<!--
			CSS
			============================================= -->

		</head>
		<body>
        <?php include "header.php" ?>
			<!-- start banner Area -->

			<!-- End banner Area -->

			<!-- Start Volunteer-form Area -->
			<section class="Volunteer-form-area section-gap" style="height: 650px">
				<div class="container emp-profile" style=" position: relative; top: 40px; " >


                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">

                                    <img id="output"  src="uploades/medium/<?PHP echo $row['IMAGE']?>" alt="" />
<!-- changer le couleur de mot : change photo btn-primary  -->
                                    <div class="file btn  btn-primary">
                                        Change Photo

                                        <input type="submit" id="images_input" name="file" onclick="readURL(this);"  class="form-control-file"><br>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-head">
                                    <h5 style="position: relative;top: -20px">
                                  <span class="glyphicon glyphicon-user"></span> <?PHP echo $row['Firstname']; echo " " ; echo $row['Lastname'] ?>
                                    </h5>
                                    <h6>

                                    </h6>

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Mes informations</a>
                                        </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="motdepasse-tab" data-toggle="tab" href="#4" role="tab" aria-controls="motdepasse" aria-selected="false" >Changer mot de passe</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modifier mes informations</a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <form method="POST" action="../core/SupprimerCompte.php" >
                                 <input hidden name="IDSUP" value="<?PHP echo $row['ID_CLIENT']; ?>">
                                    <button  style="position: relative;right: -150px;top: -20px;" class="btn btn-lg btn-danger"  type="submit"><i class="glyphicon glyphicon-trash"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-work">
                                   
                                    <!-- <a href="">Historique des commandes</a><br/> -->

                                    <br>
                                    <br>
                                    <a href="logout.php" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane  show active" id="home2" role="tabpanel" aria-labelledby="home-tab" style="position: relative;top: -70px">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom D'utilisateur:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['USERNAME']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom & Prenom:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['Firstname']; echo " ";echo $row['Lastname'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['EMAIL']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['mobile']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['BIRTHDAY']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?PHP echo $row['adresse']; }?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab" style="position: relative;top: -70px">
                                        <?PHP

                                        foreach($info as $row){ }

                                        ?>
                                        <form class="form"  id="update_form" method="POST" action="../core/ModifierClient.php" >
                                            <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <br>
                                                        <button class="btn btn-lg btn-success"  name="id" id="id" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> </button>
                                                       <!--  <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                                                    </div>
                                                </div>
                                            <div class="form-group">

                                                <div class="col-xs-6">
                                                    <label for="username"><h4>Username</h4></label>
                                                    <span class="check_ok" style="color:#149541; font-size:1em;"></span>
                                                    <span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
                                                    <span id="error_user" class="text-danger"></span>
                                                    <input style="background: white" type="text" class="form-control" name="username" id="username" value="<?PHP echo $row['USERNAME']; ?>" title="enter your username">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="mobile"><h4>Mobile</h4></label>
                                                    <input  style="background: white" type="text" class="form-control" name="mobile" id="mobile" value="<?PHP echo $row['mobile']; ?>" title="enter your mobile number if any.">
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-xs-6">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <span id="error_email" class="text-danger"></span>
                                                    <span class="check_ok1" style="color:#149541; font-size:1em;"></span>
                                                    <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>

                                                    <input  style="background: white"  type="email" class="form-control" name="email" id="email" value="<?PHP echo $row['EMAIL']; ?>" title="enter your email.">

                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-xs-6">
                                                    <label for="adresse"><h4>Adresse</h4></label>
                                                    <input style="background: white"  type="text" class="form-control" name="adresse" id="adresse" value="<?PHP echo $row['adresse'];  ?>" title="enter your email.">

                                                </div>
                                            </div>
                                            <div class="form-group">

                                                
                                        </form>

                                    </div>

                                </div>
                                <div class="tab-pane" id="4">
                                    <span id="res" ></span>
                                    <form class="form"  id="change" method="POST" action="../core/ModifierMDP.php"  style="position: relative;top: -70px">
                                        <div class="form-group">
                                             <div class="form-group">
                                                <div class="col-xs-12">
                                                        <br>
                                                        <button class="btn btn-lg btn-success"  name="id" id="id" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> </button>
                                                       <!--  <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                                                    </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>MOT DE PASSE</h4></label>
                                                <input  style="background: white"  type="password" class="form-control" name="password" id="PASSWORD"   >
                                                <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
                                                <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>CONFIRMER MOT DE PASSE</h4></label>
                                                <input   style="background: white" type="password" class="form-control" name="pass2" id="pass2"  >
                                                <span class="check_ok2" style="color:#149541; font-size:1em;"></span>
                                                <span class="check_false2"  style="color:#F55 ; font-size:1em;"></span>
                                            </div>
                                           

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
              <script type="text/javascript">

                  function previewFile(){
                      var preview = document.getElementById('output');


                      preview.src = "./uploades/medium/<?PHP echo $row['IMAGE']; ?>";
                  }

                  previewFile();
              </script>
              <script type="text/javascript">
                  function readURL(input) {
                      window.open('image.php?mavar=change photo','Change photo','width=300, height=300');
                  }
              </script>

        </body>
	</html>