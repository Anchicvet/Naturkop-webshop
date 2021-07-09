<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
        include_once "WebSite.php";
        include_once "podaci.php";
        include_once "ListaProizvoda.php";
       
        


        $id= isset($_GET['id'])?$_GET['id']:false;
  
 
        // upit za sve. uvek za sve
        $trazeni_podaci = $d->daj_proizvode();

        //uvek pravis listu od svih
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);


        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
      
       

    ?>
        <section class="sub-header">

            <?php $ws->meni();?>
            <h1>Naši proizvodi</h1>
        </section>
    <?php


   
        $listaProizvoda->prikazi_proizvod_sa_id($id);



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
