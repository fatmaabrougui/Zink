<?PHP
include "../core/clientc.php";
$client1c=new clientc();
$listeclients=$client1c->afficherclients();

//var_dump($listeEmployes->fetchAll());
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Afficher clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="afficher.css">
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://localhost/frontoff/views/">
    <img src="logo.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Galerie</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/backoffice/views/afficherclient.php">Liste clients</a>
        <li class="nav-item">
      <a class="nav-link" href="#">Contacts</a>
    </li>
    </li>
  </ul>
</nav>


<div class="container">
  <h2 class="liste">Liste clients</h2>
          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>tel</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
    	<?PHP
foreach($listeclients as $row){
	?>
      <tr>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><?PHP echo $row['nom_client']; ?></td>
	<td><?PHP echo $row['prenom_client']; ?></td>
	<td><?PHP echo $row['tel_client']; ?></td>
	<td><?PHP echo $row['password_client']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<button type="submit" name="supprimer" value="supprimer" class="btn btn-danger">supprimer</button>
	<input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="id_client">
	</form>
	</td>
	 
	<td><a button type="button"  class="btn btn-primary" href="modifierclient.php?id_client=<?PHP echo $row['id_client']; ?>">Modifier</a></td>
	</tr>
  
	<?PHP
}
?>

 
</div>
<div>
  <form method="POST" action="http://localhost/frontoff/views/ajouter1.php">
  <button  type="submit" name="ajout" value="ajout" class="btn btn-primary">Ajouter</button>
</div>
</body>
</html>