<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURKOP</title>
    <link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css> -->
   

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

            <div class="text-box">
                    <h1>Mamina Kuhinja , Brend kompanije<br> Naturkop</h1>
                        <p>Proizvodnja domaćih džemova sa tradicijom</p>
                            <a href="https://www.instagram.com/mamina_kuhinja_dzemovi/" class="hero-btn">Posetite našu instagram stranicu</a>
                </div>
        </section>

    <section class="course">
        <h1>Proizvodi koje nudimo</h1>
        <p>Pogledajte izbor naših proizvoda</p>

        <div class="row">
            <div class="course-col">
                <h3>Džemovi- male tagle</h3>
                    <p>Od džemova u malim teglama iz našeg asortimana Vam nudimo : domaći ekstra džem od šipurka,
                         domaći ekstra džem od kajsije, domaći ekstra džem od jagode,
                          domaći ekstra džem od šljive i domaći ekstra džem od višnje</p>

            </div>

            <div class="course-col">
                <h3>Kompoti</h3>
                    <p>Od kompota iz našeg asortimana nudimo Vam domaći kompot od šljiva i domaći kompot od kajsija</p>

            </div>


            <div class="course-col">
                <h3>Džemovi- velike tagle</h3>
                    <p>Od džemova u velikim teglama iz našeg asortimana Vam nudimo : domaći ekstra džem od šipurka,
                        domaći ekstra džem od kajsije, domaći ekstra džem od jagode,
                         domaći ekstra džem od šljive i domaći ekstra džem od višnje</p>

            </div>
            
        </div>

    </section>
    <section class="campus">
            <h1>Naši najprodavaniji proizvodi</h1>
            <p>Pored velikog asortimana proizvoda Mamine Kuhinje predstavljamo Vam naše najprodavanije proizvode</p>

              <div class="row">
                  <div class="campus-col">
                  <img src="images/LD-30.jpg">
                  <div class="layer">
                      <h3>Šljiva</h3>
                  </div>
                </div>
                <div class="campus-col">
                    <img src="images/LD-33.jpg">
                    <div class="layer">
                        <h3>Šipurak</h3>
                    </div>
                  </div><div class="campus-col">
                    <img src="images/LD-36.jpg">
                    <div class="layer">
                        <h3>Kajsija</h3>
                    </div>
                  </div>
              </div>   
    </section>

    <section class="facilities">
        <h1>Predlozi obroka</h1>
        <p>Uživajte u proizvodima naše kompanije.</p>
            <div class="row">
                    <div class="facilities-col">
                            <img src="images/pexels-da.jpg">
                            <h3>Kopmot od šljive</h3>
                            <p>Možda direktno iz tegle!</p>
                    </div>
                    <div class="facilities-col">
                        <img src="images/photo-161.jpg">
                        <h3>Džemovi od kajsije i jagode</h3>
                        <p>Možda sa Vašim omiljenim margarinom,</p>
                    </div>
                    <div class="facilities-col">
                        <img src="images/pexels-photo-5591712.jpeg">
                        <h3>Džem od šljiva</h3>
                        <p>Ili možda u Vašem homemade kroasanu!</p>
                    </div>
            </div>


    </section>
 

    <section class="cta">
            <h1>Kontaktirajte nas<br> za bilo koja pitanja,preporuke ili savete</h1>
                <a href="" class="hero-btn">Kontaktirajte nas</a>
    </section>

        <?php
        //$listaProizvoda->prikazi_proizvode($grupa);
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