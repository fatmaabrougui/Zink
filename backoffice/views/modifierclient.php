<HTML>
<head>
	<title>Modifier Client</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientc.php";

if (isset($_GET['id_client'])){
	$clientc=new clientc();
    $result=$clientc->recupererclient($_GET['id_client']);
	foreach($result as $row){
		$id_client=$row['id_client'];
		$nom_client=$row['nom_client'];
		$prenom_client=$row['prenom_client'];
		$tel_client=$row['tel_client'];
    $password_client=$row['password_client'];
?>
<form method="POST">
	<div class="container">
  <center><h2>Modifier</h2></center>
<table>



 <form action="/action_page.php">
    <div class="form-group">
      <label for="usr">ID:</label>
      <input type="number" class="form-control" id="usr" name="id_client" value="<?PHP echo $id_client ?>">
    </div>
    <div class="form-group">
      <label for="usr">Nom:</label>
      <input type="text" class="form-control" id="usr" name="nom_client" value="<?PHP echo $nom_client ?>">
    </div>
    <div class="form-group">
      <label for="usr">Prenom:</label>
      <input type="text" class="form-control" id="usr" name="prenom_client"value="<?PHP echo $prenom_client ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Mot De Passe:</label>
      <input type="password" class="form-control" id="pwd" name="password_client"value="<?PHP echo $password_client ?>">
    </div>
    <div class="form-group">
      <label for="usr">Telephone:</label>
      <input type="number" class="form-control" id="usr" name="tel_client"value="<?PHP echo $tel_client ?>">
    </div>
    <input type="hidden" name="id_ini" value="<?PHP echo $_GET['id_client'];?>">
    <button type="submit" name="modifier" value="modifier"class="btn btn-outline-secondary">Modifier</button>

      
</form>

<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['id_client'],$_POST['nom_client'],$_POST['prenom_client'],$_POST['password_client'],$_POST['tel_client']);
	$clientc->modifierclient($client,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherclient.php');
}
?>
<form method="POST" action="afficherclient.php">
             <button type="submit" name="retour" value="retour" class="btn btn-outline-success">Retour</button>
      </form>
</body>
</HTMl>