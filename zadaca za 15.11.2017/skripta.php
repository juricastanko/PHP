<?php
$lozinke=[];
    $ime=$_POST["ime"];
    echo "Ime: ".$ime."<br>";
    $prezime=$_POST["prezime"];
    echo "Prezime: ".$prezime."<br>";
    $ulica=$_POST["ulica"];
    echo "Ulica: ".$ulica."<br>";
    $broj=$_POST["broj"];
    echo "Broj: ".$broj."<br>";
    $primjedba=$_POST["primjedba"];
    if($primjedba=""){
        echo "nema primjedbe, sve je uredu <br>";
    }
    else{
        echo "Primjedba: ".$primjedba."<br>";
    }
    $zemlja=$_POST["Zemlja"];
    echo "Zemlja: ".$zemlja."<br>";
    $telbroj=$_POST["telbroj"];
    echo "Telefonski broj: ".$telbroj."<br>";
    $korime=$_POST["korime"];
    echo "Korisničko ime: ".$korime."<br>";
    if(($_POST["lozinka"])==($_POST["lozinka1"])){
        echo("lozinka je postavljena");

    }
    else{
        echo("lozinka nije postavljena");
    }


?>