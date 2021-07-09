<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
    include "WebSite.php";
    include "podaci.php";
    include "ListaProizvoda.php";
    include_once "Proizvod.php";
     
    $grupa= isset($_GET['grupa'])? $_GET['grupa'] : false;
  
 
    // // upit za sve. uvek za sve
    $trazeni_podaci = $d->daj_proizvode();

    // //uvek pravis listu od svih
    $listaProizvoda = new ListaProizvoda($trazeni_podaci);

    $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));


    ?>
    <section class="sub-header">
    <?php  $ws->meni();  ?>
    <h1>Naši proizvodi</h1>
    </section>
      
    <section class="course">
        <h1>Proizvodi koje nudimo</h1>
        <p>Pogledajte izbor naših proizvoda</p>

        

        <div class="row">
            <?php
            foreach($ws->grupe as $grupa){
                ?>
            <div class="course-col">
                <h3> <?php echo" <a href='proizvodipogrupama.php?grupa=$grupa'>$grupa</a>";  ?> </h3>
                    <?php  
                    if($grupa === "Veca tegla"){
                        echo "<p>Od džemova u velikim teglama iz našeg asortimana Vam nudimo : domaći ekstra džem od šipurka,
                        domaći ekstra džem od kajsije, domaći ekstra džem od jagode,
                         domaći ekstra džem od šljive i domaći ekstra džem od višnje</p>";
                    }
                    if($grupa === "Manja tegla"){
                        echo "<p>Od džemova u malim teglama iz našeg asortimana Vam nudimo : domaći ekstra džem od šipurka,
                        domaći ekstra džem od kajsije, domaći ekstra džem od jagode,
                         domaći ekstra džem od šljive i domaći ekstra džem od višnje</p>";
                    }
                    if($grupa === "Kompot"){
                        echo "<p>Od kompota iz našeg asortimana nudimo Vam domaći kompot od šljiva i domaći kompot od kajsija</p>";

                    }
                    ?>
            </div>
       

        <?php
        }

      echo  "</div>";
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