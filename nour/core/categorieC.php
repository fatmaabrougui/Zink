<?PHP
include_once "../../config.php";

class categorieC {
	/*
		echo "IdC: ".$categorie->getIdC ()."<br>";
		echo "IdC: ".$categorie->getdescription_cat()."<br>";
		
	}
*/	
	function ajouterCategorie ($categorie){
		$sql="insert into categorie (id_cat,nom_cat) VALUES (:id_cat,:description_cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_cat=$categorie->getIdC();
        $description_cat=$categorie->getNomCat();
		

		$req->bindValue(':id_cat',$id_cat);
		$req->bindValue(':description_cat',$description_cat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function affichercategories(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_cat= a.id_cat";
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
	function supprimercategorie($id_cat){
		$sql="DELETE FROM categorie where id_cat= :id_cat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_cat',$id_cat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$id_cat_ini){
		$sql="UPDATE categorie SET id_cat=:id_cat,nom_cat=:description_cat WHERE id_cat=:id_cat_ini";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

        $req=$db->prepare($sql);

    $id_cat=$categorie->getIdC();
    $description_cat=$categorie->getNomCat();
		

		$req->bindValue(':id_cat',$id_cat);
		$req->bindValue(':id_cat_ini',$id_cat_ini);
		$req->bindValue(':description_cat',$description_cat);

    $req->execute();


        try{
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getTraceAsString();


        }
		
	}
	function recuperercategorie($id_cat){
		$sql="SELECT * from categorie where id_cat=$id_cat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecategories($tarif){
		$sql="SELECT * from categorie where PrixDisc=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/**/
}

?>