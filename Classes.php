<?php 


class Connexion {
   public  $user  ;
   public  $pass ;
   public  $dbh ;
    
    public function __construct($user,$pass){
        $this->setUser($user);
        $this->setPass($pass); 
      
    }
    public function setUser($user){
        $this->user = $user;

    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function setDBH($dbh){
        $this->dbh = $dbh;
    }
    public function connect(){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=zink', $this->user, $this->pass);
           // echo "connected";  
            //$req = "INSERT INTO tables_resto (nb_personnes,etat_tables,emplacement_tables) VALUES ('".$nbpersonnes."','".$etat."','".$emplacement."') ";
            $this->setDBH($dbh);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            //die();
        }
    }
    public function addTable($nbpersonnes,$etat,$emplacement){
        
        try {
            $req = "INSERT INTO tables_resto (nb_personnes,etat_tables,emplacement_tables) VALUES ('".$nbpersonnes."','".$etat."','".$emplacement."') ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $this->dbh->query($req);
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function getTables(){
        
        try {
            $req = "SELECT * FROM tables_resto";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $tables = $result->fetchAll();
            return $tables;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function getAvailableTables(){
        
        try {
            $req = "SELECT * FROM tables_resto WHERE etat_tables = 'disponible' ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $tables = $result->fetchAll();
            return $tables;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function setTableReservation($id){
        try {
            $req = "UPDATE tables_resto SET etat_tables ='reservee'  WHERE id_tables ='".$id."'";
            
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
        
            
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
    }
    public function setTableAvailable($id){
        try {
            $req = "UPDATE tables_resto SET etat_tables ='disponible'  WHERE id_tables ='".$id."'";
            
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
        
            
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
    }
    public function reserveTableTouser($iduser,$idtable,$datereser,$heurereser){
        
        try {
            $req = "INSERT INTO  reservation (id_tables,date_reserv,heure_reserv,id_client) VALUES ( '".$idtable."','".$datereser."','".$heurereser."','".$iduser."' ) ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $this->setTableReservation($idtable);
            
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function getReservedTablesToUser($id){
        
        try {
            $req = "SELECT * FROM reservation WHERE id_client = '".$id."' ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $reservations = $result->fetchAll();
            return $reservations;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function getReservationById($id){
        
        try {
            $req = "SELECT * FROM reservation WHERE id = '".$id."' ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $reservation = $result->fetch();
            return $reservation;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function setReservationById($id,$datereser,$heurereser){
        
        try {
            $req = "UPDATE reservation SET date_reserv = '".$datereser."' , heure_reserv = '".$heurereser."'  WHERE id = '".$id."' ";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function getTableById($id){
        
        try {
            $req = "SELECT * FROM tables_resto WHERE id_tables ='".$id."'";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $table = $result->fetch();
            return $table;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function modifyTableById($id,$nbpersonnes,$emplacement){
        
        try {
            $req = "UPDATE tables_resto SET nb_personnes ='".$nbpersonnes."' , emplacement_tables = '".$emplacement."'  WHERE id_tables ='".$id."'";
            
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
        
            
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    
    public function deleteTableById($id){
        
        try {
            $req = "DELETE  FROM tables_resto WHERE id_tables ='".$id."'";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
        
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
    public function deleteReservationId($id,$idtable){
        
        try {
            $req = "DELETE  FROM reservation WHERE id ='".$id."'";
            $this->setTableAvailable($idtable);
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
        
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
   
    public function getTableByEmplacement($nom){
        
        try {
            $req = "SELECT * FROM tables_resto WHERE no emplacement_tables ='".$nom."'";
            //echo $req;
            //var_dump($this->dbh);
            //var_dump($this->dbh);
            $result = $this->dbh->query($req);
            $table = $result->fetch();
            return $table;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            //die();
        }
        

    }
}

?>


