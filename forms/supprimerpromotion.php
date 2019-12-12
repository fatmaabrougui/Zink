<?PHP
include "C:/wamp64/www/Hbib/core/promotionC.php";
$promotionC=new promotionC();
if (isset($_POST["nom_promo"])){
	$promotionC->supprimerpromotion($_POST["nom_promo"]);
	header('Location: ../tables/promotion.php');
}

?>