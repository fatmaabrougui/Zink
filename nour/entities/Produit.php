<?PHP
class Produit{
	private $id_p;
	private $description;
	private $available;
	private $image;
    private $prix_org;
	private $prix_disc;
	private $id_cat;
		function __construct($id_p,$description,$available,$image,$prix_org,$prix_disc,$id_cat){
		$this->id_p=$id_p;
		$this->description=$description;
		$this->available=$available;
		$this->image=$image;
		$this->prix_org=$prix_org;
		$this->prix_disc=$prix_disc;
		$this->id_cat=$id_cat;
	}
	
	function getIdP () {
		return $this->id_p;
	}
	function getDescription(){
		return $this->description;
	}
	function getAvailable(){
		return $this->available;
	}
	function getImage(){
		return $this->image;
	}
	function getPrixOrg(){
		return $this->prix_org;
	}
	function getPrixDisc(){
		return $this->prix_disc;
	}
	function getIdCat (){
		return $this->id_cat;
	}

	function setIdP($id_p){
		$this->id_p=$id_p;
	}
	function setDescription($description){
		$this->description= $description;
	}
	function setAvailable($available){
		$this->available=$available;
	}
	function setImage($image){
		$this->image=$image;
	}

	function setPrixOrg($prix_org){
		$this->prix_org=$prix_org;
	}

	function setPrixDisc($prix_disc){
		$this->prix_disc=$prix_disc;
	}
	function setIdCat($id_cat){
		$this->id_cat=$id_cat;
	}
	
}

?>