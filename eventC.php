<?PHP
include_once "C:\wamp64\www\Hbib\config.php";
class eventC {
function afficherevent ($event){
		echo "nom_event: ".$event->getnom_event()."<br>";
		echo "type_event: ".$event->gettype_event()."<br>";
		echo "date_event: ".$event->getdate_event()."<br>";
		
	}
	function ajouterevent($event){
		$sql="insert into event (nom_event,type_event,date_event) values (:nom_event,:type_event,:date_event)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_event=$event->getnom_event();
        $type_event=$event->gettype_event();
		$date_event=$event->getdate_event();
		$req->bindValue(':nom_event',$nom_event);
		$req->bindValue(':type_event',$type_event);
		$req->bindValue(':date_event',$date_event);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		
	function afficherevents(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.nom_event= a.nom_event";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function affichercroissant(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.nom_event= a.nom_event";
		$sql="SElECT * From event order by type_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherdecroissant(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.nom_event= a.nom_event";
		$sql="SElECT * From event order by type_event desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function affichersingle($nom_event){
		//$sql="SElECT * From event e inner join formationphp.event a on e.nom_event= a.nom_event";
		$sql="SElECT * From event where nom_event = $nom_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function supprimerevent($nom_event){
		$sql="DELETE FROM event where nom_event= :nom_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_event',$nom_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevent($event,$nom_event){
		$sql="UPDATE event SET nom_event=:nom_event,type_event=:type_event,date_event=:date_event WHERE nom_event=:nom_event";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom_event=$event->getnom_event();
        $type_event=$event->gettype_event();
		$date_event=$event->getdate_event();
		
		$datas = array(':nom_event'=>$nom_event,':type_event'=>$type_event,':date_event'=>$date_event);
		$req->bindValue(':nom_event',$nom_event);
		$req->bindValue(':type_event',$type_event); 
		$req->bindValue(':date_event',$date_event);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererevent($nom_event){
		$sql="SELECT * from event where nom_event=$nom_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeevents($date_event){
		$sql="SELECT * from event where date_event=$date_event";
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