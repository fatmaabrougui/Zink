<?PHP
include "../entities/client.php";
include "../core/clientc.php";
$clientC=new clientC();
$clientC->afficherclient($client);
echo "****************";
echo "<br>";
echo "id_client:".$client->getid();
echo "<br>";
echo "nom_client:".$client->getNom();
echo "<br>";
echo "prenom_client:".$client->getPrenom();
echo "<br>";
echo "mdp_client:".$client->getmdp();
echo "<br>";
echo "telephone_client:".$client->getTelephone();
echo "<br>";




?>