<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURKOP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
   

</head>
<body>


<?php
  
   
    class WebSite {
        public $grupe;


        function __construct($grupe){
            $this->grupe=[];
            foreach($grupe as $grupa){
               array_push($this->grupe,$grupa) ;
            }
        }

        function meni(){
           ?>
        
        
            <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>

                    <ul>
                        <li><a href="index.php">POČETNA</a></li>
                        <li><a href="onama.php">O NAMA</a></li>
                        <li><a href="proizvodi.php">NAŠI PROIZVODI</a></li>
                        <li><a href="prodavnice.php">PRODAJNI OBJEKTI</a></li>
                        <li><a href="kontaktform.php">KONTAKT</a></li>
                    </ul>

                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            
   
           
        
        <?php
        }
        
      
        function footer(){
            ?>
        
        <section class="footer">
            <h4>Poštujemo tradiciju!</h4>
            <p>Zapratite nas na društvenim mrežama</p>
                <div class="icons">
                    <i class="fab fa-facebook"></i>
                    
                    <i class="fab fa-instagram"></i>
                   
                </div>
                    
                 <p>Made by AnaDesign</p>
    </section>

        <?php
        }
    }
        ?>



   
    </body>
    </html>