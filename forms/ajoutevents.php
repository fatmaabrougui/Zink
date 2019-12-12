<?PHP
include "../../../../entities/events.php";
include "../../../../core/eventC.php";

if (isset($_POST['nom_event']) and isset($_POST['type_event']) and isset($_POST['date_event'])){
$event1=new event($_POST['nom_event'],$_POST['type_event'],$_POST['date_event']);


var_dump($event1);

$nom_event=strlen($_POST['nom_event']);
$type_event=strlen($_POST['type_event']);
$date_event=strlen($_POST['date_event']);

$event1C=new eventC();
$event1C->ajouterevent($event1);
header('Location: ../tables/basic-table.php');


}else{
	echo "vĂ©rifier les champs";
}
//*/

?>