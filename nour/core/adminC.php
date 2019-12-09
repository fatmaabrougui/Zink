<?php
include_once "../../config.php";

class adminC
{

    public function exist ($admin)
    {

        try{
        $sql = "SELECT * from admin WHERE   user_name_admin='".$admin->getUserNameAdmin()."' and pass_admin='".$admin->getPassAdmin()."'" ;
        $db = config::getConnexion();

            $req=$db->prepare($sql);

//            $req->bindValue(':username',"'".$admin->getUserNameAdmin()."'");
//            $req->bindValue(':pwd' ,"'".$admin->getPassAdmin()."'");

            $l=$db->query($sql);
$liste=$l->fetchAll();

            return $liste;

          }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();

        }




    }

}