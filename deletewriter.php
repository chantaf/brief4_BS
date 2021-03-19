<?php
include('conn.php');
if(isset($_POST['del']))
{
    $id =$_POST['dele'];
    $req="delete from writers where idWriter=$id";
    $res=mysqli_query($con,$req);
    header('location:writer.php');
}
?>