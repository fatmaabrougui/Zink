<?php
session_start();
if (empty($_SESSION['username']) || (empty($_SESSION['Id'])))
{
    header("location:login.php");

}


include_once "../../core/produitC.php";
include_once "../../entities/Produit.php";
if (isset($_POST['ajouter'])){
    $img=null;
}
if (!empty($_FILES['img'])) {

    /*$extension_upload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
    $x = uniqid();  // retourne un id unique
    $img=  $x . '.' . $extension_upload;
    move_uploaded_file($_FILES["img"]["tmp_name"], 'images/' .$img);
    $produit=new Produit($_POST['id_p'],$_POST['description'], $_POST['available'],$img,$_POST['prix_org'],$_POST['prix_disc'],$_POST['categorie']);
     */
    $extension_upload = $_FILES['img']['name'];
    //$x = uniqid();  // retourne un id unique
   // $img=  $x . '.' . $extension_upload;
    move_uploaded_file($_FILES["img"]["tmp_name"], '../images/' .$extension_upload);
    $produit=new Produit($_POST['id_p'],$_POST['description'], $_POST['available'],$extension_upload,$_POST['prix_org'],$_POST['prix_disc'],$_POST['categorie']);
    
    $produitC=new produitC();
    $produitC->ajouterProduit($produit);

    header('Location: afficherProduit.php');
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
        include_once "../../core/produitC.php";
        $produit=new produitC();
        $listeProduits=$produit->afficherproduits();

        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 m-auto grid-margin">
                        <div class="card">
                            <div class="row">
                                <div class="col-10 ml-lg-4 ">
                                    <form class="forms-sample" id="addProduit" method="post"  enctype="multipart/form-data">
                                        <div class="form-group">

                                            <label for="exampleInputName1">ID produit</label>
                                            <input type="number" required class="form-control" name="id_p" id="id_p" placeholder="id produit">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">prix original</label>
                                            <input type="number" required class="form-control" name="prix_org" id="prix_org" placeholder="prix origine">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">prix apres remise</label>
                                            <input type="number" required name="prix_disc" class="form-control" id="prix_disc" placeholder="prix apres remise">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">available</label>
                                            <select required class="form-control" name="available" id="available">
                                                <option value="0">valable</option>
                                                <option value="1">description valable</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>image upload</label>
                                            <input required type="file" name="img" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">description</label>
                                            <textarea required class="form-control" name="description" id="description" rows="4"></textarea>
                                        </div>



                                        <div class="card-body">
                                            <p class="card-description">choisissez la categorie</p>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php
                                                    include "../../core/categorieC.php";
                                                    $categorie=new categorieC();
                                                    $listeCategorie=$categorie->affichercategories();
                                                    foreach($listeCategorie as $row) {
                                                        ?>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input name="categorie" type="radio"
                                                                           value="<?PHP echo $row['id_cat']; ?>"
                                                                           class="form-check-input" checked>
                                                                    <?PHP echo $row['nom_cat']; ?>
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>














                                        <button  class="btn btn-primary mr-2" onclick=" testAjouProduit()" >Submit</button>
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

    </div>
    <!-- container-scroller -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <script src="js/test.js"></script>
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

