<?PHP
include_once "../../config.php";

class produitC {
	/*
		echo "IdP: ".$produit->getIdP ()."<br>";
		echo "IdP: ".$produit->getDescription()."<br>";
		echo "PrixOrg: ".$produit->getPrixOrg()."<br>";
		echo "PrixDisc: ".$produit->getPrixDisc()."<br>";
		echo "Image: ".$produit->getIamge()."<br>";
		echo "Available: ".$produit->getAvailable ()."<br>";
		echo "IdC: ".$produit->getIdC()."<br>";
	}
*/	
	function ajouterProduit ($produit){-
		$sql="insert into produit (id_p,description,prix_org,prix_disc,image,available,id_cat) values (:id_p, :description, :prix_org, :prix_disc, :image, :available, :id_cat)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		
        $id_p=$produit->getIdP();
        $description=$produit->getDescription();
		$prix_org=$produit->getPrixOrg();
		$prix_disc=$produit->getPrixDisc();
        $image=$produit->getImage();
		$available=$produit->getAvailable();
		$id_cat=$produit->getIdCat();
        try{
            $req->bindValue(':id_p',$id_p);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix_org',$prix_org);
		$req->bindValue(':prix_disc',$prix_disc);
		$req->bindValue(':image',$image);
		$req->bindValue(':available',$available);
		$req->bindValue(':id_cat',$id_cat);

                 $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->get;
        }
		
	}


	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.id_p= a.id_p";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerproduit($id_p){
		$sql="DELETE FROM produit where id_p= :id_p";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_p',$id_p);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$id_p_org){
	    $img='';
	    if($produit->getImage()){$img=",image='".$produit->getImage()."'";}
		$sql="UPDATE produit SET id_p=:id_p".$img.",description=:description,prix_org=:prix_org,prix_disc=:prix_disc,available=:available,id_cat=:id_cat WHERE id_p=:id_p_org";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

        $req=$db->prepare($sql);

    $id_p=$produit->getIdP();
    $description=$produit->getDescription();
    $prix_org=$produit->getPrixOrg();
    $prix_disc=$produit->getPrixDisc();

    $available=$produit->getAvailable();
    $id_cat=$produit->getIdCat();
    try{
        $req->bindValue(':id_p',$id_p);
        $req->bindValue(':id_p_org',$id_p_org);
        $req->bindValue(':description',$description);
        $req->bindValue(':prix_org',$prix_org);
        $req->bindValue(':prix_disc',$prix_disc);
        $req->bindValue(':available',$available);
        $req->bindValue(':id_cat',$id_cat);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;


        }
		
	}
	function recupererproduit($id_p){
		$sql="SELECT * from produit where id_p=$id_p";
		$db = config::getConnexion();
		try{
		$l=$db->query($sql);
		$liste=$l->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
/*		function rechercherListeproduits($tarif){
		$sql="SELECT * from produit where PrixDisc=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	function chercherproduit($foo)
    {   
	
	    $db = config::getConnexion(); 
		//$sql="SELECT * from produit where id_p= $foo ";
		$sql="SELECT * from produit where description LIKE '%$foo%' ";
         //connexion bd
        
        //reqt sql
        //fetch data
        try
        {
        	$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
        }
        catch (Exception $e)
        {
        	die('Erreur:'.$e->getMessage());
		}
		

		
	} 
	
	function trierproduitprix()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit order by prix_org";
			  // $sql="SELECT * from produit where description LIKE '%$foo%' ";
		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}





		/*  function valableProduit($produit)
		  {
			
			$sql="UPDATE produit SET available==1 where available==0";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_p',$id_p);
			try{
				$req->execute();
			   // header('Location: index.php');
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}

			
		}
*/























































}










?>