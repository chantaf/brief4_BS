<?php
include('conn.php');
$title_error=$price_error=$writer_error=$img_error=$ajouter=$ajouter_error="";
$title=$price=$writer=$img="";

if(isset($_POST['title'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $writer=$_POST['wir'];
    $img=$_FILES['image']['name'];
}
    

if(isset($_POST['btn']))
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
		$price="";
    }
	
		
	if(empty($writer))
	{
		$writer_error= "writer obligatoire";
		$writer="";
	}
		
	
	if(empty($img)) 
	{
		$img_error= "image obligatoire";
		$img="";
		
	}

    if($title_error==""&&$price_error==""&&$writer_error==""&&$img_error=="")
    {
        $upp="images1/".$img;
		move_uploaded_file($_FILES['image']['tmp_name'],$upp);

	$req="insert into books(title,price,image)values('$title',$price,'$img')";
    $res=mysqli_query($con,$req);
	if($res){
		$ajouter="ajouter bien";
		$title=$price="";
		$r="select max(idBook) as id FROM books";
		$ree=mysqli_query($con,$r);
		while ($aa= mysqli_fetch_array($ree, MYSQLI_ASSOC)){
			$id=$aa['id'];
		}
		
		$q="insert into bookwriter(idBook,idWriter)values($id,$writer)";
		$e=mysqli_query($con,$q);
	}else{
        $ajouter_error="ajouter refus";
		$title=$price=$writer=$img="";
		
    }
	}	
	
	
}
