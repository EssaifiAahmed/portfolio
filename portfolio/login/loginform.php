<?php 
    include './cnx.php'; 
    include './inc/session.php';
    Session::start();
    /**Traitement du formulaire */


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        try{
            if(isset($_POST['TextEmail']) && isset($_POST['TextPassword'])){
                $username = $conn->quote($_POST['TextEmail']);
                $password = $conn->quote($_POST['TextPassword']);
                $select = $conn->query("select * from login where email = $username and pass = $password");

                if($select->rowCount() > 0){
                    $_SESSION['auth']=$select->fetch();
                    header('Location:Dashboard/index.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }

    }
    else{
        // echo('Erreur GET');
    }
?>