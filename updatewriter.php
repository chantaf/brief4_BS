<?php
include('conn.php');
include('updatewriter1.php');
    if(isset($_POST['up'])){
        $id =$_POST['up'];
    }
   
    $req="select * from writers where idWriter=$id";
    $res=mysqli_query($con,$req);
    if($res){

        while($data=mysqli_fetch_array($res))
        {
        $name=$data['name'];
        $birth=$data['birth'];   
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WRITER</title>
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
            color:green;
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
                    <a href="book.php"  >BOOK</a>
                    <a href="writer.php" class="active">WRITER</a>
                </nav>

            </div>
        </header>

        <div class="total">
            <div class="titre"><h1>UPDATE WIRITER</h1></div>
            <div class="form">
                <form method="POST" action="updatewriter.php">
                    <table>
                        <tr>
                            
                            <td>Writer's Name: </td> <td><input type="text" id="name" name="name" value='<?= $name?>'></td> 
                            <td><span id="nnn"><?= $name_error ?></span></td>
                        </tr>

                        <tr>
                            
                            <td>Birth:</td> <td><input type="date" id="birth" name="birth" value='<?= $birth?>'></td>
                            <td><span id="nnn"><?= $birth_error ?></span></td>
                        </tr>

                        
                            <td>
                              <input type='hidden' value="<?=$id?>" name='up'>
                              <input type="submit" value="update" id="upp" name="upp">
                            </td>
                            <td> <span id="n"><?= $ajouter ?></span></td>
                           <td> <span id="nnn"><?= $ajouter_error ?></span></td>
                        </tr>


                    </table>

                </form>

            </div>

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

            <div class="about">  
                © 2011 John Doe All Rights Reserved
            </div>
           
        </div>

    </footer>
       
    </body>
</html>