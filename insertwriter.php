<?php
include('conn.php');
$name_error=$birth_error=$ajouter=$ajouter_error="";
$name=$birth="";

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $birth=$_POST['birth'];
}
    

if(isset($_POST['btn']))
{
	
	if(empty($name))
	{
		$name_error= "name obligatoire";
		
	}
    
	if(empty($birth))
	{
		$birth_error= "birth obligatoire";
		
	}
    if($name_error==""&&$birth_error=="")
    { 

	$req="insert into writers(name,birth)values('$name','$birth')";
    $res=mysqli_query($con,$req);
	if($res){
		$ajouter="ajouter bien";
		$name=$birth="";
	}else{
        $ajouter_error="ajouter refus";
		$name=$birth="";
		
    }
	}	
	
	
}
