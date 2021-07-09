<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        include "./website.php";
        include "./ListaProizvoda.php";
        include "./podaci.php";
        
        $trazeni_podaci = $d->izvrsi_upit("select * from proizvodi;");

       
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);
        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
       
        $grupa= isset($_GET['grupa'])?$_GET['grupa']:false;
             
        

        ?>

        <section class="header">

             <?php  $ws->meni(); ?>
        


    <form action="kontakt.php" class="kontakt">
            <label>Kontaktirajte nas:</label><br>
            <input type="text" placeholder="Vaše ime" name="ime"> <br>
            <input type="text" placeholder="Vaš email" name="mail"><br>
            <input type="text" placeholder="Vaša poruka" name="poruka" ><br>
            <button class="send">Pošaljite</button>


    </form>
    </section>
    <?php
       
        $ws->footer();
        
    ?>



    <script type="text/JavaScript">

        var navLinks=document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>
</body>
</html>