<?php
$id = $_GET['id'];
session_start();
require_once '../../Entities/Classes.php';
$db = new Connexion('root','');
$db->connect();
$table = $db->getTableById($id);

if (isset($_POST['modify'])){


    $nbrpersonnes = $_POST['nbrpersonnes'];
    $emplacement = $_POST['emplacement'];
    $id =$_POST['id'];
    
    
    $db->modifyTableById($id,$nbrpersonnes,$emplacement);
    $_SESSION['msg'] = 'Table modifié avec succes';
    header('location:index.php');
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modifier une table</title>
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
                  <h4 class="card-title">Modifier une table</h4>
                  
                  <form class="forms-sample" method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre des personnes</label>
                      <input type="number" name="nbrpersonnes" class="form-control" id="exampleInputName1" value='<?php echo $table['nb_personnes']; ?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Emplacement</label>
                      <input type="text" name='emplacement' class="form-control" id="exampleInputEmail3" value='<?php echo $table['emplacement_tables']; ?>'>
                    </div>
                    <input type="hidden" name="id" value='<?php echo $id ?>'>
                    <button type="submit" name="modify" class="btn btn-primary mr-2">Modifier</button>
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

