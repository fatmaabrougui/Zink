<?php
session_start();
if (empty($_SESSION['username']) || (empty($_SESSION['Id'])))
{
    header("location:login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />



    <style>
table,th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>




</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    require_once 'nav_bar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        require_once 'sidebar.php';
        ?>
        <!-- partial -->





        <?PHP
        include "../../core/categorieC.php";
        $categorie=new categorieC();
        $listeCategorie=$categorie->affichercategories();

        ?>
        <div class="table-responsive">
            <table  style="width:100%"  >
                <tr>
                    <th>id_categorie</th>
                    <th>description</th>
                    <th>option1</th>
                    <th>option2</th>

                </tr>

                <?PHP
                foreach($listeCategorie as $row){
                    ?>
                    <tr>
                        <td><?PHP echo $row['id_cat']; ?></td>
                        <td><?PHP echo $row['nom_cat']; ?></td>
                        <td><a href="supprimerCategorie.php?id_c=<?PHP echo $row['id_cat']; ?>">Supprimer
                        </td>
                        <td><a href="modifierCategorie.php?id_c=<?PHP echo $row['id_cat']; ?>">
                                Modifier</a></td>
                    </tr>
                    <?PHP
                }
                ?>
            </table>

        </div>





















        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<script src="js/data-table.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page-->
</body>

</html>

