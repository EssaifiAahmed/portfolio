<?php
    include '../cnx.php';
    include '../inc/session.php';
    Session::start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    { 
            try{
                if(isset($_POST['Prj_ID']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['categorie']) && isset($_POST['linkgithub']) && isset($_POST['pics']) && isset($_POST['picsmodals']))
                {
                    $prj_ID = (int)$_POST['Prj_ID'];
                    $name_project=$conn->quote($_POST['name']);
                    $desc_project=$conn->quote($_POST['description']);
                    $categorie = (int)$_POST['categorie'];
                    $link=$conn->quote($_POST['linkgithub']);
                    $image=$conn->quote($_POST['pics']);
                    $imagemodals=$conn->quote($_POST['picsmodals']);
                    $query = "INSERT INTO works(id_works, name_prj, descr_prj, src_img, src_img_modals, link, id_cat) VALUES ($prj_ID,$name_project,$desc_project,$image,$imagemodals,$link,$categorie)";
                    $select = $conn->query($query);
                    if(!empty($select)){
                        header('Location:index.php');                
                    } else {
                        $msg="Error Work";
                    }
                }
            }catch(Exception $e){
                $msg ='Exception Work';
            }
    }else{
        $msg ='Erreur POST';
    }
?>