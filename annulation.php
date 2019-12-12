<?php
$id = $_GET['id'];
$idtable = $_GET['idtable'];

session_start();
require_once '../../Entities/Classes.php';
$db = new Connexion('root','');
$db->connect();
$db->deleteReservationId($id,$idtable);
$_SESSION['msg'] = "Table supprimé avec succes";
header('location:index.php');

?>