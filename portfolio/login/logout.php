<?php
include '../cnx.php'; 
require '../inc/session.php';
Session::start();
Session::destroy();
header('Location:../index.php');
?>