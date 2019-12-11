<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZINK</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/inscription.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:  black;">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
              <!--   <i class="fas fa-dog"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3" style="color:white;">ZINK</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider  mb-0 mt-2">

        <!-- Nav Item - Dashboard -->
       

        <!-- Divider -->
        <hr class="sidebar-divider">

       
        <li class="nav-item">
            <a class=" collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="color:white;">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>Utilisateur</span>
            </a>
            
        </li>
     

        <!-- Divider -->
        <hr class="sidebar-divider mb-0 mt-2">

        <!-- Nav Item - Charts -->
       

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <!-- <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
 -->
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
            

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Zink</span>
                            <img class="img-profile rounded-circle" src="img/logo.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Utilisateurs</h1>
              <p data-placement="top" data-toggle="tooltip" title="Ajouter un utilisateur" ><button class="btn btn-info btn-lg" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>Ajouter un utilisateur</button></p>

          </div>

          <!-- Content Row -->
          <div class="row">

              <table id="mytable" class="table table-bordred table-striped">

                  <thead>

                  <th>Username</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>ETAT</th>
                  <th>Bloquer</th>
                  <th>Activer</th>
                  <th>Supprimer</th>
                  </thead>
                  <tbody>
<?php include "../../core/Clients.php";
         $client=new Clients();
$result =$client->AFFClient();

while($row = $result->fetch()  )
{

?>
                  <tr>

                      <td><?php echo $row["USERNAME"]?></td>
                      <td><?php echo $row["Firstname"]?></td>
                      <td><?php echo $row["Lastname"]?></td>
                      <td><?php echo $row["adresse"]?></td>
                      <td><?php echo $row["EMAIL"]?></td>
                      <td><?php echo $row["mobile"]?></td>
                      <?php if( $row["status"]=="Blocked") {?>
                      <td><span style="color: red"><?php echo $row["status"]?></span></td>
                      <?php } ?>
                      <?php if( $row["status"]=="active") {?>
                          <td><span style="color: green"><?php echo $row["status"]?></span></td>
                      <?php } ?>
                      <form method="POST" action="../../core/BloquerUser.php" >


                          <input hidden name="IDSUP" value="<?php echo $row["ID_CLIENT"]?>">
                      <td><p data-placement="top" data-toggle="tooltip" title="bloquer"><button type="submit" class="fas fa-minus-circle fa-sm text-danger-50" ></span></button></p></td>
                      </form>
                      <form method="POST" action="../../core/DebloquerUser.php" >


                          <input hidden name="IDSUP" value="<?php echo $row["ID_CLIENT"]?>">
                          <td><p data-placement="top" data-toggle="tooltip" title="activer"><button type="submit" class="fas fa-vote-yea fa-sm text-danger-50" ></span></button></p></td>
                      </form>
                      <form method="POST" action="../../core/SupprimerUser.php" >


                          <input hidden name="IDSUP" value="<?php echo $row["ID_CLIENT"]?>">


                      <td><p data-placement="top" data-toggle="tooltip" title="supprimer"><button type="submit" class="fas fa-trash-alt fa-sm text-danger-50" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </form>
                  </tr>
                  <?php } ?>
                  </tbody>

              </table>



        </div>
      </div>
    </div>


      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" >
          <div class="modal-dialog">
              <div class="modal-content"style="width: 700px">

                  <div class="modal-body"  >
                      <div >
                          <div class="container">
                              <div class="row">
                                  <form class="col s12" id="reg-form" method="POST" action="../../core/ajoutclientbyadmin.php">
                                      <div class="row">
                                          <div class="input-field col s6">
                                              <input name="username" id="username" name="username" type="text" class="validate" required>
                                              <label for="username">Username</label>

                                              <span id="error_username" class="text-danger"></span>
                                              <span class="check_ok" style="color:#149541; font-size:1em;"></span>
                                              <span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
                                          </div>
                                          <div class="input-field col s6">
                                              <input  name="email" id="email" type="email" class="validate" required><br>
                                              <label for="email"> Email</label>
                                              <span id="error_email" class="text-danger"></span>
                                              <span class="check_ok1" style="color:#149541; font-size:1em;"></span>
                                              <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="input-field col s6">
                                              <input name="firstname" id="first_name" type="text" class="validate" required>
                                              <label for="first_name">Prenom</label>
                                          </div>
                                          <div class="input-field col s6">
                                              <input name="lastname" id="last_name" type="text" class="validate" required><br>
                                              <label for="last_name">Nom</label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="input-field col s6">
                                              <input name="address" id="adresse" type="text" class="validate" required>
                                              <label for="adresse">Adresse</label>
                                          </div>
                                          <div class="input-field col s6">
                                              <input name="mobile" id="mobile" type="text" class="validate" required><br>
                                              <label for="mobile">Mobile</label>

                                              <span id="error_mobile" class="text-danger"></span>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="input-field col s12">
                                              <input name="password" id="password" type="password" class="validate" minlength="6" required>
                                              <label for="password">mot de passe</label>
                                              <span id="error_password" class="text-danger"></span>
                                          </div>
                                          <div class="input-field col s12">
                                              <input name="password2" id="password2" type="password" class="validate" minlength="6" required>
                                              <label for="password2">confirmer mot de passe</label>
                                              <span id="error_password2" class="text-danger"></span>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="input-field col s6">

                                              <div class="gender-male">
                                                  <input class="with-gap" name="gender"value="femme"  type="radio" id="male" checked required />
                                                  <label for="male">Male</label>
                                              </div>
                                              <div class="gender-female">
                                                  <input class="with-gap" name="gender"  value="homme" type="radio" id="female" required />
                                                  <label for="female">Female</label>
                                              </div>
                                          </div>

                                          <div class="input-field col s6">
                                              <br>

                                              <button class="btn btn-success" id="action" type="submit" name="action"><span class="glyphicon glyphicon-ok"></span> ajouter
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>

                      </div>
                  </div>

              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>


      <!-- End of Main Content -->


      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
<script>$(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>
</html>
