<?php 
include '../cnx.php';
require '../inc/session.php';
Session::start();

if($_SERVER['REQUEST_METHOD'] == "GET")
{ 
    try{
        if(isset($_GET['id_works']))
        {
            $id_prd = (int)($_GET['id_works']);
            $query = "DELETE FROM works WHERE id_works = $id_prd";
            $select = $conn->query($query);
            if(!empty($select)){
                header('Location: index.php');
                $msg = "supp success";
            } else {
                $msg="Error delete";
            }
        }
    }catch(Exception $e){
        $msg ='Exception delete';
    }
}else{
$msg ='Erreur POST';
}
?>