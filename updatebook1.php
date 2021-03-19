<?php
include('conn.php');

$writer = "";
if (isset($_POST['wir'])) {
    $writer = $_POST['wir'];
}
if(isset($_POST['title'])){
    $id = $_POST['up'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img=$_FILES['image']['name'];
}

$writer_error = "";
$title_error=$price_error=$writer_error=$img_error=$ajouter=$ajouter_error=$ajoutere=$ajoutere_error="";

if(isset($_POST['updte']))
{

    if(empty($title))
    {
        $title_error= "title obligatoire";
        $title="";
    }
    
    if(empty($price))
    {
        $price_error= "price obligatoire";
        $price="";
    }else if (!preg_match("/^\d+$/",$price))
    {
        $price_error= "price contien suaf les numero";
    }
    
    
    if(empty($img)) 
    {
        $img_error= "image obligatoire";
        $img="";
        
    }

    if($title_error==""&&$price_error==""&&$img_error=="")
    {
        $upp="images1/".$img;
        move_uploaded_file($_FILES['image']['tmp_name'],$upp);

    $req="update  books set title='$title',price=$price,image='$img' where idBook= $id";
    $res=mysqli_query($con,$req);
    if($res){
        $ajouter="modifier bien";
        $title=$price="";
    }else{
        $ajouter_error="modifier refus";
        $title=$price=$writer=$img="";
        
    }
  
}
}

if (isset($_POST['adrt'])) {
    if (empty($writer)) {
        $writer_error = "writer obligatoire";
        $writer = "";
    }

    if ($writer_error == "") {
        $id = $_POST['up'];
        $q="insert into bookwriter(idBook,idWriter)values($id,$writer)";
        $e=mysqli_query($con,$q);

        if($e){
            $ajoutere="modifier bien";
        }else{
            $ajoutere_error="modifier refus";
        }
   
    }

}

if(isset($_POST['del']))
{
    $idr=$_POST['dele'];
    $idb=$_POST['up'];

    $req="delete from bookwriter where idWriter=$idr and idBook=$idb";
    $res=mysqli_query($con,$req);
}

?>
