<?PHP
include_once "../core/config.php";
session_start();
$idc=$_GET['id'];
$note=$_GET['note'];
if(isset($_GET['id']) ) {

    $sql = " SELECT * from note where ID_CLIENT='$idc'";
    $db = config::getConnexion();
    $listnot = $db->query($sql);
    if ($listnot->rowCount() == 0) {
        $db = config::getConnexion();
        $sql = "insert into  note (NOTE,ID_CLIENT) values ($note,'$idc')";

        $req = $db->prepare($sql);
        $req->execute();


        header("location:" . $_SERVER['HTTP_REFERER']);
    } else {
        if($note==0)
        { $db = config::getConnexion();
            $sql = "delete from note  where ID_CLIENT='$idc'";

            $req = $db->prepare($sql);
            $req->execute();


            header("location:" . $_SERVER['HTTP_REFERER']);}
else {
        $db = config::getConnexion();
        $sql = "UPDATE note set NOTE=$note where ID_CLIENT='$idc'";

        $req = $db->prepare($sql);
        $req->execute();


        header("location:" . $_SERVER['HTTP_REFERER']);
    }
}}
?>