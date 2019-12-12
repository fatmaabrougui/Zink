<?PHP
include "../../../../core/eventC.php";
$eventC=new eventC();
if (isset($_POST["nom_event"])){
	$eventC->supprimerevent($_POST["nom_event"]);
	header('Location: ../tables/basic-table.php');
}

?>