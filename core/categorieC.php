<?PHP
include_once "C:\wamp64\www\issam\config.php";
class categorieC {
function affichercategorie ($categorie){
		echo "nom: ".$categorie->getnom()."<br>";
	}
	function ajoutercategorie($categorie){
		$sql="insert into categorie (nom) values (:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$categorie->getNom();
		
		$req->bindValue(':nom',$nom);
			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		
	function afficherprods(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id= a.id";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function affichercategories(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id= a.id";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($id){
		$sql="DELETE FROM categorie where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$id){
		$sql="UPDATE categorie SET  nom=:nom WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPAxRES,false);
try{		
		$req=$db->prepare($sql);
        $nom=$categorie->getnom();
	
		$datas = array(':nom'=>$nom);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
					
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($id){
		$sql="SELECT * from categorie where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>