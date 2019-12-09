<?PHP
include "../../core/produitC.php";
$produitC=new produitC();
if (isset($_GET["id_p"])){
	$produitC->supprimerProduit($_GET["id_p"]);
	header('Location: afficherProduit.php');
}

?>