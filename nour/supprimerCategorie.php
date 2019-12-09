<?PHP
include "../../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_GET["id_c"])){
    $categorieC->supprimerCategorie($_GET["id_c"]);
    header('Location: afficherCategorie.php');
}

?>