<?PHP
include "../core/clientc.php";
$clientc=new clientc();
if (isset($_POST["id_client"])){
	$clientc->supprimerclient($_POST["id_client"]);
	header('Location: afficherclient.php');
}

?>