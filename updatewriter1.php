<?php
include('conn.php');

if(isset($_POST['name'])){
    $id = $_POST['up'];
    $name=$_POST['name'];
    $birth=$_POST['birth'];
}

$name_error=$birth_error=$ajouter=$ajouter_error="";

if(isset($_POST['upp']))
{

    if(empty($name))
    {
        $name_error= "name obligatoire";
    }
    
    if(empty($birth))
    {
        $birth_error= "birth obligatoire";
       
    }
    if($name_error=="" && $birth_error=="")
    {
       
    $req="update writers set name='$name',birth='$birth' where idWriter= $id";
    $res=mysqli_query($con,$req);
    if($res){
        $ajouter="modifier bien";
        $name=$birth="";
    }else{
        $ajouter_error="modifier refus";
        $name=$birth=""; 
    }
  
}
}