<?php
     $ime=$_GET['ime'];
     $mail=$_GET['mail'];
     $text=$_GET['poruka'];

     $to = "cvetkovicana888@gmail.com";
     $subject= "e-mail sa sajta";
     $headers= "From:".$mail;
     mail($to,$subject,$text,$headers);

     echo "Vaša poruka je uspešno poslata";




?>