<?php
session_start();
require_once '../../Entities/Classes.php';
$db = new Connexion('root','');
$db->connect();
$tables = $db->getTables();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Le zink</title>
  <style>
    a.btn{
      color:white !important;
      cursor: pointer;
    }
    </style>
  <?php include '../../views/stylesheets.php'; ?>
  </head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <?php include '../../views/nav.php'; ?>
    </nav>
    <!-- partial -->
    <?php include '../../views/admin/menu.php'; ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
    <div style='padding-top:10' class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des  Tables</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre des personnes</th>
                          <th>Etat</th>
                          <th>Emplacement</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i =1; foreach($tables as $table){ ?>
                          <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $table['nb_personnes']; ?> personnes </td>
                          <td><?php if ($table['etat_tables'] == "disponible" ){echo "<label class='badge badge-primary'>".$table['etat_tables']."</label>";}else{echo "<label class='badge badge-warning'>".$table['etat_tables']."</label>";}  ?></td>
                          <td><?php echo $table['emplacement_tables']; ?></td>
                          <td><a href="modify.php?id=<?php echo $table['id_tables'];  ?>" class="btn btn-success">Modifier</a> <a href="delete.php?id=<?php echo $table['id_tables'];  ?>" class="btn btn-danger" onclick='return confirm("voulez-vous vraiment supprimer cette table")'>Supprimer</a></td>
                        </tr>



                      <?php $i++;  } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
    </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/template/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../assets/template/vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/template/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../assets/template/js/off-canvas.js"></script>
  <script src="../../assets/template/js/hoverable-collapse.js"></script>
  <script src="../../assets/template/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../assets/template/js/data-table.js"></script>
  <script src="../../assets/template/js/jquery.dataTables.js"></script>
  <script src="../../assets/template/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

