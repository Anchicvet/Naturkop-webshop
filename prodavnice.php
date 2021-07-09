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
        include "listaproizvoda.php";
        include "podaci.php";

        $trazeni_podaci = $d->izvrsi_upit("select * from proizvodi;");
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);
        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
       
        $grupa= isset($_GET['grupa'])?$_GET['grupa']:false;
             

       
    ?>
        <section class="sub-header">

            <?php $ws->meni();?>
            <h1>Prodajni objekti</h1>
        </section>
            <div class="prodavnice">
                <div class="text-prod">
                    
                        <p>Proizvode kompanije NATURKOP mozete naći u sledećim prodavnicama:</p>
                </div>
                <div class="pbox-galerija">
                    <div class="pbox"><a href="https://mojkatalog.rs/aman"><img src="prodavnice/aroma.png" alt="aroma"></a> </div>
                    <div class="pbox"> <a href="https://www.dis.rs"><img src="prodavnice/dis.png" alt="dis"></a></div>
                    <div class="pbox"> <a href="https://tekijanka.com/maloprodajni-objekti/"><img src="prodavnice/tekijanka.png" alt="tekijanka"></a></div>
                    <div class="pbox"><a href="https://www.gomex.rs/prodajna-mreza"><img src="prodavnice/Gomex.jpg" alt="Gomex"></a> </div>
                    <div class="pbox"> <a href="https://univerexport.rs/sr/prodavnice"><img src="prodavnice/univer.png" alt="univer"></a></div>
                    <div class="pbox"><a href="http://www.prodavnicasunce.rs/prodavnice"><img src="prodavnice/sunce.png" alt="sunce"></a> </div>
                    <div class="pbox"> <a href="https://europrom.rs/prodajni-objekti/"><img src="prodavnice/europrom-logo.png" alt="europrom"></a></div>
                    <div class="pbox"> <a href="https://medius.rs/prodajna-mreza/"><img src="prodavnice/medius.png" alt="medius"></a></div>
                    <div class="pbox"><a href="https://podunavlje.rs/prodavnice/"><img src="prodavnice/Podunavlje.png" alt="Podunavlje"></a> </div>
                    <div class="pbox"> <a href="https://www.spmarketi.com/index.php/sr/maloprodaja"><img src="prodavnice/sp.png" alt="sp"></a></div>
                </div>
            </div>


<!-- 
    <?php
        $ws->footer();

    ?> -->
  
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