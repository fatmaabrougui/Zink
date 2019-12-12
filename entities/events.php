<?PHP
class event{
	private $nom_event;
	private $type_event;
	private $date_event;
	function __construct($nom_event,$type_event,$date_event){
		$this->nom_event=$nom_event;
		$this->type_event=$type_event;
		$this->date_event=$date_event;
	}
	
	function getnom_event(){
		return $this->nom_event;
	}
	function gettype_event(){
		return $this->type_event;
	}
	function getdate_event(){
		return $this->date_event;
	}

	function setnom_event($nom_event){
		$this->nom_event=$nom_event;
	}
	function settype_event($type_event){
		$this->type_event;
	}
	function setdate_event($date_event){
		$this->date_event;
	}
	
}

?>