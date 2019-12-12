<?PHP
class promotion{
	private $nom_promo;
	private $desc_promo;
	private $date_promo;
	function __construct($nom_promo,$desc_promo,$date_promo){
		$this->nom_promo=$nom_promo;
  		$this->desc_promo=$desc_promo;
		$this->date_promo=$date_promo;
		
	}
	
	function getnom_promo(){
		return $this->nom_promo;
	}
	function getdesc_promo(){
		return $this->desc_promo;
	}
	function getdate_promo(){
		return $this->date_promo;
	}


	function setnom_promo($nom_promo){
		$this->nom_promo=$nom_promo;
	}
	function setdesc_promo($desc_promo){
		$this->desc_promo;
	}
	function setdate_promo($date_promo){
		$this->date_promo;
	}
}

?>