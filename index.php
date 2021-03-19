<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8"> <link rel="stylesheet" href="navstyle.css">
        <link rel="stylesheet" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    </head>
    <body>
        
        <header>
            <div class="nav">
                <div><img src="images\newlogo.jpg"  alt="#" id="imglogo"></div>
            
                <nav class="nav1">
                    <a href="index.php" class="active">HOME</a>
                    <a href="gelery.php">GALERY</a>
                    <a href="book.php">BOOK</a>
                    <a href="writer.php">WRITER</a>
                </nav>
                <div id="bars" onclick="myFunction();">
                <i  class="fas fa-bars"></i>
                </div>
              

            </div>
        </header>
       <div class="total">
                        <div id="imgbody2">
                            <img src="images\bodypic.jpg" alt="#" id="imgbo2">
                        </div>
                        <div id="text">
                            <p>
                                    Welcome to our library! 
                                    We have thousands of books for 
                                    our students to browse and check out.
                                      One part of our library that stands out 
                                      from other libraries is that we are lucky 
                                      to have a part of the International Space 
                                      Station hanging over us as we read. 
                                       The part was donated by Jerry Ross and 
                                       can been at the top of the picture.  
                                       Use the links to the left to navigate 
                                       throughout our library.
                            </p>
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