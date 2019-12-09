<?php  session_start(); ?>
<?php 

require '../../core/produitC.php';
$produitC=new produitC();
$listeproduit=$produitC->afficherproduit();


 if (empty($_SESSION['id']))
 {
	 echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='login.php';";
echo "</script>";
	 
 }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EyeZone | Produits</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
		 <!-- Required meta tags -->

  </head>
  <body>
  
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"> EyeZone</div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                  </ul>
                </li>
                <!-- Logout    -->
				
         <form method="POST">               
			   <li class="nav-item"><a href="../../core/logout.php" class="nav-link logout" name="logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
		</form>	   
	
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Wafa Rabeh</h1>
              <p> Manager</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class=""><a href="index.php"> <em class="icon-home"></em>  Home </a></li>
			
               <li class=""><a href="admin_v.php"> <em class="icon-home"></em>  Admin </a></li>
             <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Stock </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="produit_v.php">Produit</a></li>
                <li><a href="categorie_v.php">Categorie</a></li>
				
                
              </ul>
            </li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Commande </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="listedescommandes.php">Liste Des Commandes</a></li>
                <li><a href="produit_commande.php">Produits D'une Commande</a></li>
                <li><a href="statistiqueDesCommandes.php">Statistiques Des Commandes</a></li>
              </ul>
            </li>
            <li><a href="clients.php"> <i class="fa fa-users"></i>Clients </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Marketing </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
               <li><a href="espacevenement.php">Evenement</a></li>
                        <li><a href="espacepromotion.php">Promotion</a></li>
                
              </ul>
            </li>
           <li <li class=""><a href="livraison.php"> <i class="icon-interface-windows"></i>Livraisons </a></li>
            <li><a href="afficherlivreur.php"> <i class="icon-interface-windows"></i>Livreur </a></li>
           <li class="" ><a href="serviceapresvente.php"> <i class="icon-interface-windows"></i>service aprés vente </a></li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="displayRdv.php"> <i class="icon-mail"></i>RendezVous </a></li>
            <li> <a href="confirmRdv.php"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Produits</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
    
       
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark"><a class="navbar-brand" href="produit_ajout.php">Click Here To Add</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
    </ul>
	
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="produit_trie_prix.php">Prix</a></li>
                <li><a href="produit_trie_ref.php">Reference</a></li>
                <li><a href="produit_trie_qte.php">Quantite</a></li>
				 <li><a href="produit_trie_mar.php">Marque</a></li>
              </ul>
	</li>	
  </div>
  	  
</nav>

  <div class="card-body">
 
   <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Reference</th>
      <th scope="col">Marque</th>
      <th scope="col">Destinataire</th>
      <th scope="col">Prix</th>
	  <th scope="col">Quantite</th>
	  <th scope="col">Url</th>
	  <th scope="col">Categorie</th>
	  <th scope="col">Description</th>
	 
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($listeproduit as $produit): ?>
    <tr>
      <td> <?= $produit->refe; ?> </td>
	  <td> <?= $produit->mar ?> </td>
      <td> <?= $produit->dest; ?> </td>
      <td> <?= $produit->prix; ?> </td>
      <td> <?= $produit->qte; ?> </td>
	  <td> <?= $produit->url; ?> </td>
	  <td> <?= $produit->nomCat; ?> </td>
	  <td> <?= $produit->descr; ?> </td>
	  
     <td>
              <a href="modifier_produit.php?refe=<?= $produit->refe ?> "   class="btn btn-info"> Edit </a>
              <a onclick="return confirm('Are you sure you want to delete this entry ?')" href="supprimerProduit.php?refe=<?= $produit->refe ?>" class="btn btn-danger"> Delete </a>
            </td>
    </tr>
  </tbody>
            <?php endforeach; ?>
</table>
<?php
$dataPoints = array(
    array("label"=> "Homme", "y"=> (int)$produitC->homme()),
   array("label"=> "Femme", "y"=> (int)$produitC->femme()) ,
   array("label"=> "Enfant", "y"=> (int)$produitC->Enfant())
);

?>
                                       <script>
                    window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            exportEnabled: true,
                            title:{
                                text: "Produit"
                            },
                            subtitles: [{
                                text: "Destinataire"
                            }],
                            data: [{
                                type: "pie",
                                showInLegend: "true",
                                legendText: "{label}",
                                indexLabelFontSize: 16,
                                indexLabel: "{label} - #percent%",
                                yValueFormatString: "฿#,##0",
                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                        });
                        chart.render();

                    }
                </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="../../lib/canvasjs.min.js"></script>

  </div>
  
  


    

          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>EyeZone</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>&nbsp;</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>