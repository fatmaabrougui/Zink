<?php
$id = $_GET['id'];
session_start();
require_once '../../Entities/Classes.php';
$db = new Connexion('root','');
$db->connect();
$db->deleteTableById($id);
$_SESSION['msg'] = "Table supprimé avec succes";
header('location:index.php');

?>