<?PHP
class client{
	private $id_client;
	private $nom_client;
	private $prenom_client;
	private $password_client;
	private $tel_client;
	function __construct($id_client,$nom_client,$prenom_client,$password_client,$tel_client){
		$this->id_client=$id_client;
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		$this->password_client=$password_client;
		$this->tel_client=$tel_client;
	}
	
	function getid_client(){
		return $this->id_client;
	}
	function getnom_client(){
		return $this->nom_client;
	}
	function getprenom_client(){
		return $this->prenom_client;
	}
	function getpassword_client(){
		return $this->password_client;
	}
	function gettel_client(){
		return $this->tel_client;
	}

	function setnom_client($nom_client){
		$this->nom_client=$nom_client;
	}
	function setprenom_client($prenom_client){
		$this->prenom_client;
	}
	function setpassword_client($password_client){
		$this->password_client=$password_client;
	}
	function settelephone($tel_client){
		$this->tel_client=$tel_client;
	}
	
}

?>