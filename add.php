<?php
session_start();
if (isset($_POST['add'])){


    $nbrpersonnes = $_POST['nbrpersonnes'];
    $emplacement = $_POST['emplacement'];
    require_once '../../Entities/Classes.php';
    $db = new Connexion('root','');
    $db->connect();
    $db->addTable($nbrpersonnes,'disponible',$emplacement);
    $_SESSION['msg'] = 'Table ajouté avec succes';
    header('location:index.php');
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ajouter une table</title>
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
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter une table</h4>
                  
                  <form class="forms-sample" method='POST' action="add.php">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre des personnes</label>
                      <input type="number" name="nbrpersonnes" class="form-control" id="exampleInputName1" placeholder="Nombre des personnes">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Emplacement</label>
                      <input type="text" name='emplacement' class="form-control" id="exampleInputEmail3" placeholder="Emplacement du table">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary mr-2">Ajouter</button>
                    <button type='reset' class="btn btn-light">Effacer</button>
                  </form>
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

