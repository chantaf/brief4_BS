<?php
include('conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GALERY</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="galery.css">
        <link rel="stylesheet" href="navstyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


        <script>
                    function vermin(){
                        var min=document.getElementById('pricemin');
                        var ver=/^[0-9]+$/;
                        if(!(ver.test(min.value)))
                        {
                            alert("le champ min accepter sauf les nombres");
                        }
                    }



                    function vermax(){
                        var max=document.getElementById('pricemax');
                        var ver=/^[0-9]+$/;
                        if((ver.test(max.value))==false)
                        {
                            alert("le champ max accepter sauf les nombres");
                        }
                    }


                    function filterage()
                    {

                        var writer=document.getElementById('writer');
                        
                        if(writer.value!=""){ 
                            var t1=document.querySelectorAll(".im1");
                            for(var i=0;i<t1.length;i++){
                                t1[i].style.display="none";
                            }

                            var se= writer.value;
                            var t=document.querySelectorAll("."+se);
                            for(var i=0;i<t.length;i++){
                                t[i].style.display="block";
                            }   
                  }
                    }
                  function filterminmax()
                    {
                        var min=document.getElementById('pricemin');
                        var max=document.getElementById('pricemax');
                        var prix=document.getElementsByName('pr');
                        var t1=document.querySelectorAll(".im1");
                        if(min.value=="" && max.value==""){
                            alert("le champs min et max obligatoire");
                        }else{


                       
                        for(var i=0;i<t1.length;i++){
                                t1[i].style.display="none";
                        }
                       
                            for(var i=0;i<prix.length;i++){
                             if(parseInt(prix[i].innerText) >= parseInt(min.value) && parseInt(prix[i].innerText) <= parseInt(max.value)){
                                t1[i].style.display="block";
 
                                }

                            }
                        }
                    }

          
          
    </script>
    </head>
    <body>
        
        <header>
            <div class="nav">
                <div><img src="images\newlogo.jpg"  alt="#" id="imglogo"></div>
            
                <nav class="nav1">
                    <a href="index.php" >HOME</a>
                    <a href="gelery.php" class="active">GALERY</a>
                    <a href="book.php">BOOK</a>
                    <a href="writer.php">WRITER</a>
                </nav>

            </div>
            <style>
                .pr{
                    color:white;
                }
            </style>
             <div id="bars" onclick="myFunction();">
                <i  class="fas fa-bars"></i>
                </div>
              
        </header>
      <div class="totalrech">
            <div class="selwiriter">
               <strong>WRITER :</strong> 
                 <select name="wri" id="writer" onchange="filterage()">
                 
                         <option value=""></option>
                                <?php
                                $query = mysqli_query($con,"Select * from writers"); 
                                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                echo "<option value='a".$row['idWriter']."'>".$row['name']."</option>";
                            }
                                ?>
                                 
                </select>
            </div>


            <div class="inputprix">
                <div class="t1"><strong>PRICE :</strong> </div>
                <div class="t1"><input type="text" id="pricemin" placeholder="Min" onblur="vermin()"></div>
                <div class="t1"><input type="text" id="pricemax" placeholder="Max" onblur="vermax()"></div>
                <div class="t1"><input type="button" id="buttrech" value="Search" onclick="filterminmax()"></div>
            </div>
        </div>

        <div class="imgg">
     
       
        <?php
                $req1 = "select * from books";
                $res1 = mysqli_query($con,$req1);
                
                while ($data = mysqli_fetch_array($res1)) {
                    $req="SELECT * FROM `writers` WHERE idWriter in (select idWriter from bookwriter WHERE idBook=".$data['idBook'].")" ;
                    $res = mysqli_query($con, $req);
                    $class=" ";
                    while ($da = mysqli_fetch_array($res)) {
                        $class="a".$da['idWriter']." ";
                    }
                    echo '<div class="im1'." ".$class.'">'; 
                
                echo ("<img src='images1/" . $data['image'] . "' width=70px/> <br/>");
                echo ("<span class='pr'>Price : <span name='pr' class='pr'>".$data['price']."</span></span>");
             echo '</div>';
                 
            }
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
    <script>
function myFunction() {
  var x = document.querySelector(".nav1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = " none";
  }
}
window.onresize=function(){
    if(window.innerWidth >= 800){
        document.querySelector(".nav1").style.display = "flex";
    }else{
        document.querySelector(".nav1").style.display = "block";
    }
}
</script>
       
    </body>
</html>