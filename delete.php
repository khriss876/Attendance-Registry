<?php 
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if(!$_GET['id']){
    include 'includes/errormessage.php';
    header("location: viewrecords.php");
}else{

    $id=$_GET['id'];

    $result = $crud->deleteAttendeee($id);
    if($result){
        header("location: viewrecords.php");
    }
    else{
        echo'error';
    }
}

?>