<?php

include "connection.php"; 


$ime =$_POST["ime"];
$prezime =$_POST["prezime"];
$email =$_POST["mail"]; 
$vrsta_zahtjeva =$_POST["izbornikZ"];
$poruka = $_POST["poruka"];
$obavijest =$_POST["izbornikO"];
$operater = $_POST["operater"]; 


$sql = "INSERT INTO evidencija(ime, prezime, email, vrsta_zahtjeva, status_zahtjeva, opis_zahtjeva, obavijest, operater_ev) 
VALUES ('$ime', '$prezime', '$email', '$vrsta_zahtjeva', aktivan, '$poruka', '$obavijest', '$operater');";
$result = mysqli_query($conn, $sql); 

if($result == true){
  echo "<br />Uspiješan unos!";
}else{
  echo "<br />Pogreška unosa!";
}


?>