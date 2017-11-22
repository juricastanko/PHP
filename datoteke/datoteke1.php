<?php
$datoteka1=fopen("podaci.txt","w");
$ime=$_POST["ime"];
$prezime=$_POST["prezime"];
$adresa=$_POST["adresa"];
$mjesto=$_POST["mjesto"];
$brtel=$_POST["brtel"];

fwrite ($datoteka1,$ime."\r\n");
fwrite ($datoteka1,$prezime."\r\n");
fwrite ($datoteka1,$adresa."\r\n");
fwrite ($datoteka1,$mjesto."\r\n");
fwrite ($datoteka1,$brtel."\r\n");

?>