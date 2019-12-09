<?php
session_start();
if (empty($_SESSION['username']) || (empty($_SESSION['Id'])))
{
    header("location:login.php");

}

include "../../core/categorieC.php";
include "../../entities/Categorie.php";
if (isset($_POST['modifier'])){
    $categorieC=new categorieC();
    $cat=new Categorie($_POST['id_cat'],$_POST['description_cat']);
    $categorieC->modifiercategorie($cat,$_POST['id_c_ini']);

    header('Location: afficherCategorie.php');

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


        if (isset($_GET['id_c'])){
        $categorieC=new categorieC();
        $result=$categorieC->recuperercategorie($_GET['id_c']);
       $categorie=$result[0];


        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 m-auto grid-margin">
                        <div class="card">
                            <div class="row">
                                <div class="col-10 ml-lg-4 ">
                                    <form class="forms-sample" method="post">
                                        <div class="form-group">

                                            <label for="exampleInputName1">ID categorie</label>
                                            <input type="text" required name="id_cat" value="<?PHP echo $categorie['id_cat'];?>"  class="form-control" id="id_cat" placeholder="Name">
                                            <input type="text" required hidden name="id_c_ini" value="<?PHP echo $categorie['id_cat'];?>"  class="form-control" id="id_c" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">description</label>
                                            <textarea required class="form-control" name="description_cat" id="description" rows="4"><?PHP echo $categorie['nom_cat'];?></textarea>
                                        </div>







                                        <button type="submit" name="modifier" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                        <form>





















                                            <!-- main-panel ends -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
            <?PHP

        }

        ?>

    </div>
    <!-- container-scroller -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/file-upload.js"></script>
    <!-- End custom js for this page-->
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

