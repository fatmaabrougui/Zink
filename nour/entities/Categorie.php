<?PHP
class Categorie{
	private $id_cat;
	private $nom_cat;
	
	function __construct($id_cat,$description_cat){
		$this->id_cat=$id_cat;
		$this->nom_cat=$description_cat;
		
	}
	
	function getIdC () {
		return $this->id_cat;
	}
	function getNomCat(){
		return $this->nom_cat;
	}
	
	function setIdC($id_cat){
		$this->id_cat=$id_cat;
	}


}

?>