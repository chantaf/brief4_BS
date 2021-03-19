<?php
include('conn.php');
include('updatebook1.php');
    if(isset($_POST['up'])){
        $id =$_POST['up'];
    }
   
    $req="select * from books where idBook=$id";
    $res=mysqli_query($con,$req);
    if($res){

        while($data=mysqli_fetch_array($res))
        {
        $title=$data['title'];
        $price=$data['price'];
        $img="images1/".$data['image'];
        
    }
}

 
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>UPDATEBOOK</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="book1.css">
        <link rel="stylesheet" href="navstyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
        <style>
            #nnn{
                      color:red;
                }
            #n{
                      color: green;
                }
        </style>
    </head>
    <body>
        <header>
            <div class="nav">
                <div><img src="images\newlogo.jpg"  alt="#" id="imglogo"></div>
            
                <nav class="nav1">
                    <a href="index.php">HOME</a>
                    <a href="gelery.php">GALERY</a>
                    <a href="book.php"  class="active">BOOK</a>
                    <a href="writer.php">WRITER</a>
                </nav>

            </div>
            <style>
            .btn1{
                position: relative;
                left: 70%;
            }

            .btn2{
                position: relative;
                left: 70%;
            }
            </style>
        </header>

        <div class="total">
            <div class="titre"><h1>UPDATE BOOKS</h1></div>
            <div class="form">
            
                <form method="POST" action="updatebook.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            
                            <td>Book Title : </td> <td><input type="text" id="title" name="title" value="<?= $title?>"></td> 
                            <td><span id="nnn"><?= $title_error ?></span></td> 
                        </tr>

                        <tr>
                            
                            <td>Book Price:</td> <td><input type="text" id="price" name="price" value="<?= $price?>"></td>
                            <td> <span id="nnn"><?= $price_error ?></span></td> 
                        </tr>

                        <tr>
                          <td>Upload Book Image:</td>  <td><input type="file" id="imagee" name="image">
                          </td>
                          <td><img src="<?= $img?>" alt="#" width="70px"></td>
                         
                          <td>  <span id="nnn"><?= $img_error ?></span></td> 
                        </tr>
                        
                        <tr>
                            <td>
                              <input type='hidden' value="<?=$id?>" name='up'>
                              <input type="submit" value="update" id="upd" name="updte" class="btn1">
                            </td>
                            
                            <td>  <span id="n"><?= $ajouter ?></span></td> 
                            <td> <span id="nnn"><?= $ajouter_error ?></span></td> 
                        </tr>


                    </table>

                </form>

            </div>

         </div>
<!--***************************************************************************-->
<div class="total">
<div class="titre"><h1>ADD WRITERS</h1></div>
            <div class="form">
            
                <form method="POST" action="updatebook.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                            
                            <td>Writer:</td>
                             <td>
                                <select name="wir" id="wirir"  >
                                        <option value=""></option>
                                <?php
                                $query = mysqli_query($con,"Select * from writers"); 
                                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) 
                                echo "<option value=".$row['idWriter'].">".$row['name']."</option>";
                                ?>
                                 
                                </select>
                            </td>
                            <td> <span id="nnn"><?= $writer_error ?></span></td> 
                    </tr>
                        
                        <tr>
                            <td>
                              <input type='hidden' value=<?=$id?> name='up'>
                              <input type="submit" value="ADD" id="adrt" name="adrt" class="btn2">
                            </td>
                            
                            <td>  <span id="n"><?= $ajoutere ?></span></td> 
                            <td> <span id="nnn"><?= $ajoutere_error ?></span></td> 
                        </tr>


                    </table>

                </form>

            </div>
            </div>

<!--*********************************************************************************************-->
<div class="liste">
        <?php
        $req1 = "select * from writers,books,bookwriter 
        where writers.idWriter=bookwriter.idWriter 
        and books.idBook=bookwriter.idBook
        and books.idBook=$id
        ";
        $res1 = mysqli_query($con, $req1);
        echo "<table border=1><tr><th>ID</th><th>Name</th><th>Brith</th>";
        while ($data = mysqli_fetch_array($res1)) {
            echo ("<tr>
                <td>" . $data['idWriter'] . "</td>
                <td>" . $data['name'] . "</td>
                <td>" . $data['birth'] . "</td>

                <form method='POST' action='updatebook.php'>
                <td><input type='submit' value='delete' name='del'/></td> 
                <td><input type='hidden' value='".$id."' name='up'></td>
                <td><input type='hidden' value='" . $data['idWriter'] . "' name='dele'/></td>
                </form>
                </tr>");
        }
        echo "</table>";

        ?>

    </div>

     
                

       <footer>
        <div class="footer">
        
                <div class="footer-items">
                    <i class="fas fa-envelope "></i>
                     cartogo@gmail.com
                </div>

                <div class="footer-items">
                    <i class="fas fa-map-marker-alt "></i>
                     69 Square de la Couronne PARIS 
                </div>

                <div class="footer-items">
                    <i class="fas fa-phone-alt "></i>
                   0612345678
                </div>
                <div class="footer-items">
                    <i class="fab fa-instagram fa-2x" ></i>
                    <i class="fab fa-facebook-square fa-2x" ></i>
                    <i class="fab fa-linkedin fa-2x" ></i>
                    <i class="fab fa-twitter-square fa-2x" ></i>
                </div>
                <div class="footer-items">
               </div>

            <div class="footer-items">  
                © 2011 John Doe All Rights Reserved
            </div>
           
        </div>

    </footer>
       
    </body>
</html>





