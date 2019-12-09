<?php
session_start();
if (empty($_SESSION['username']) || (empty($_SESSION['Id'])))
{
    header("location:login.php");

}

include_once "../../core/produitC.php";
include_once "../../entities/Produit.php";
if (isset($_POST['modifier'])){
    $img=null;

if (!empty($_FILES['img'])) {

    $extension_upload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
    $x = uniqid();  // retourne un id unique
    $img = $x . '.' . $extension_upload;
    move_uploaded_file($_FILES["img"]["tmp_name"], '../images/' . $img);
}
    $produit=new Produit($_POST['id_p'],$_POST['description'], $_POST['available'],$img,$_POST['prix_org'],$_POST['prix_disc'],$_POST['categorie']);
    $produitC=new produitC();
    $produitC->modifierproduit($produit,$_POST['id_org']);

    //header('Location: afficherProduit.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>zink</title>
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

        if (isset($_GET['id_p'])) {
            $produitC = new produitC();
            $result = $produitC->recupererproduit($_GET['id_p']);
            $produit = $result[0];


            ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 m-auto grid-margin">
                            <div class="card">
                                <div class="row">
                                    <div class="col-10 ml-lg-4 ">
                                        <form class="forms-sample" method="post" enctype="multipart/form-data">
                                            <div class="form-group">

                                                <label for="exampleInputName1">ID produit</label>
                                                <input type="text" required value="<?PHP echo $produit['id_p']; ?>"
                                                       name="id_p" class="form-control" id="exampleInputName1"
                                                       placeholder="Name">
                                                <input type="text" name="id_org" hidden
                                                       value="<?PHP echo $produit['id_p']; ?>" class="form-control"
                                                       id="exampleInputName1" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">prix original</label>
                                                <input type="number" name="prix_org" required
                                                       value="<?PHP echo $produit['prix_org']; ?>" class="form-control"
                                                       id="exampleInputEmail3" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">prix apres remise</label>
                                                <input required type="number" name="prix_disc"
                                                       value="<?PHP echo $produit['prix_disc']; ?>" class="form-control"
                                                       id="exampleInputPassword4" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelectGender">available</label>
                                                <select required name="available" class="form-control"
                                                        id="exampleSelectGender">
                                                    <option value="0">valable</option>
                                                    <option value="1">non valable</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>image upload</label>
                                             <input name="img" type="file" name="img" class="file-upload-default"> 
                                                
      
                                         




                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled
                                                           placeholder="Upload Image">
                                                    <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleTextarea1">description</label>
                                                <textarea name="description" required class="form-control"
                                                          id="exampleTextarea1"
                                                          rows="4"><?PHP echo $produit['description']; ?></textarea>

                                            </div>


                                            <div class="card-body">
                                                <p class="card-description">choisissez la categorie</p>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <?php
                                                        include "../../core/categorieC.php";
                                                        $categorie = new categorieC();
                                                        $listeCategorie = $categorie->affichercategories();
                                                        foreach ($listeCategorie as $row) {
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
            <?php
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

