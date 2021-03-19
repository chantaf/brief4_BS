<?php
include('insertwriter.php');
include 'conn.php';
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
            <div class="titre"><h1>ADD WIRITER</h1></div>
            <div class="form">
                <form method="POST" action="writer.php">
                    <table>
                        <tr>
                            
                            <td>Writer's Name: </td> <td><input type="text" id="name" name="name"></td> 
                            <td><span id="nnn"><?= $name_error ?></span></td>
                        </tr>

                        <tr>
                            
                            <td>Birth:</td> <td><input type="date" id="birth" name="birth"></td>
                            <td><span id="nnn"><?= $birth_error ?></span></td>
                        </tr>

                        
                            <td>
                              <input type="submit" value="ADD" id="btn" name="btn">
                            </td>
                            <td> <span id="n"><?= $ajouter ?></span></td>
                           <td> <span id="nnn"><?= $ajouter_error ?></span></td>
                        </tr>


                    </table>

                </form>

            </div>

        </div>
                <div class="title2"><h2>writers List</h2></div>
        <div class="liste">
        <?php


$req1 = "select * from writers";
$res1 = mysqli_query($con,$req1);
echo "<table border=1>
<tr>
<th>ID</th>
<th>Writer's Name</th>
<th>Birth</th></tr>";
while ($data = mysqli_fetch_array($res1)) {
    echo ("<tr>
        <td>" . $data['idWriter'] . "</td>
        <td>" . $data['name'] . "</td>
        <td>" . $data['birth'] . "</td>
        <td>
        <form method='POST' action='updatewriter.php' >
            <input type='submit' value='update' name='updt'>
            <input type='hidden' value='" . $data['idWriter'] . "' name='up'>
         </form>
        </td>
        

        <form method='POST' action='deletewriter.php'>
        <td><input type='submit' value='delete' name='del'/></td> 
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

            <div class="about">  
                © 2011 John Doe All Rights Reserved
            </div>
           
        </div>

    </footer>
       
    </body>
</html>