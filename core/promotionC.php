<?PHP
include_once "C:\wamp64\www\Hbib\config.php";
class promotionC {
function afficherpromotion ($promotion){
		echo "nom_promo: ".$promotion->getnom_promo()."<br>";
		echo "desc_promo: ".$promotion->getdesc_promo()."<br>";
		echo "date_promo: ".$promotion->getdate_promo()."<br>";
		
	}
	function ajouterpromotion($promotion){
		$sql="insert into promotion (nom_promo,desc_promo,date_promo) values ( :nom_promo,:desc_promo,:date_promo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_promo=$promotion->getnom_promo();
        $desc_promo=$promotion->getdesc_promo();
        $date_promo=$promotion->getdate_promo();

		$req->bindValue(':nom_promo',$nom_promo);
		$req->bindValue(':desc_promo',$desc_promo);
		$req->bindValue(':date_promo',$date_promo);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpromotions(){
		
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherpromotionsT(){
		$sql="SElECT * From promotion ORDER BY nom_promo ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	function supprimerpromotion($nom_promo){
		$sql="DELETE FROM promotion where nom_promo= :nom_promo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_promo',$nom_promo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpromotion($promotion,$nom_promo){
		$sql="UPDATE promotion SET nom_promo=:nom_promo, desc_promo=:desc_promo,date_promo=:date_promo WHERE nom_promo=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom_promo1->getnom_promo();
        $desc_promo=$promotion->getdesc_promo();
        $date__promo=$promotion->getdate_promo();
        
		$datas = array(':nom_promo'=>$nom_promo1,':type_promo'=>$type_promo,':date_promo'=>$date_promo,':nom'=>$nom_promo);
		$req->bindValue(':nom',$nom_promo);
		$req->bindValue(':nom_promo',$nom_promo1);
		$req->bindValue(':desc_promo',$desc_promo);
		$req->bindValue(':date_promo',$date_promo);
	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromotion($nom_promo){
		$sql="SELECT * from promotion where nom_promo=$nom_promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepromotions($nom_promo){
		$sql="SELECT * from promotion where nom_promo=$nom_promo";
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