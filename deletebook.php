<?php
include('conn.php');
if(isset($_POST['del']))
{
    $id =$_POST['dele'];
    $req="delete from books where idBook=$id";
    $res=mysqli_query($con,$req);
    header('location:book.php');
}
?>