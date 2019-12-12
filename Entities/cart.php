<?PHP
class cart{
	private $name;
	private $adress;
	private $price;
	private $phone;
	private $foods;

	function __construct($name,$adress,$price,$phone,$foods){
		$this->name=$name;
		$this->adress=$adress;
		$this->price=$price;
		$this->phone=$phone;
		$this->foods=$foods;
		
	}
	function getname(){
		return $this->name;
	}
	function getadress(){
		return $this->adress;
	}
	function getprice(){
		return $this->price;
	}
	function getphone(){
		return $this->phone;
	}
	function getfoods(){
		return $this->foods;
	}
	


	function setadress($adress){
		$this->adress=$adress;
	}
	function setprice($price){
		$this->price=$price;
	}
	function setphone($phone){
		$this->phone;
	}
	function setfoods($foods){
		$this->foods;
	}

	
}

?>