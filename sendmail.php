<?php
  $message = "Joyeuse fêtes de fin d'année : \n\n https://Charles-Aziz.github.io/carte-voeux/";
  $headers = 'From: Yassin <Yassin.j@codeur.online>' . "\r\n" .
 'Reply-To: Yassin.j@codeur.online' . "\r\n" .
 'X-Mailer: PHP/' . "\r\n" .
 "Content-type: text/plain; charset=UTF-8" . "\r\n"; phpversion();


mail($_REQUEST['email'], 'Joyeuses fêtes' , $message , $headers);


echo"L'email a été envoyé !";

?>