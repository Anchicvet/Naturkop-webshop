<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>NATURKOP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">

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
         <section class="sub-header">

         <?php $ws->meni();?>
         <h1>O Nama</h1>
        </section>
     <section class="about-us">
            <div class="row">
                    <div class="about-col">
                        <h1>Naturkop D.O.O</h1>
                        <p>NATURKOP d.o.o, je domaća proizvodnja osnovana 2010. godine u Kruševcu, sa osnovnim ciljem da džemove koje su nekada pravile Vaše mame
                            i bake ponovo približimo mladim porodicama, koje su zapostavile tradiciju pravljenja zimnice, zbog nemogućnosti tradicionalnih načina pripreme.
                            Proizvodi iz asortimana NATURKOP-a, su po prirodi, bez veštačkih aroma, boja i konzervansa, 
                            sa pažljivo biranim voćem koje je isključivo iz voćnjaka i domaćinstava voćarskih regiona Srbije.
                            <br>
                            <br>
                            NATURKOP d.o.o is a domestic production company founded on 2010 in Kruševac, Serbia wich main goal is 
                            to bring once made jams by mothers and grandmothers now to young families who neglected the tradition of 
                            making winter stores because of inability to make them traditionally.
                            The products from NATURKOP’s range are natural without any artificial flavors, 
                            colors or additives, made of carefully selected fruits entirely from domestic farms and orchards regions of Serbia.</p>
                                <a href="https://www.instagram.com/mamina_kuhinja_dzemovi/" class="hero-btn red-btn">INSTAGRAM</a>
                            </div>
                    <div class="about-col">
                            <img src="images/photo-1541690325738-d4ba017004b6.jpg">
                    </div>
            </div>

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