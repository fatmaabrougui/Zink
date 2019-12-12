<?php
include "../../../../core/eventC.php";
include "../../../../entities/events.php";
if(isset($_POST['modifier'])){
  $e=new eventC();
$event=new event($_POST['nom_event'],$_POST['type_event'],$_POST['date_event']);
$e->modifierevent($event,$_POST['id']);
header('Location: ../tables/basic-table.php');

}
?>