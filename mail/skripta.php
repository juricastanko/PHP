<?php
    $email=POST["email"];
    $naslov=POST["naslov"];
    $tekst=POST["tekst"];
    $provjera="@"

    echo "Primatelj: ".$email."<br>";
    echo "Naslov: ".$naslov."<br>";
    echo "Tekst poruke: ".$tekst."<br>";

    ini_set("SMTP","smtp.gmail.com");
    ini_set("sendmail_from","tevelly@gmail.com");
    if(preg_match($provjera, $email)){
        echo"mail je dobar";}
    else{
        echo "mail nije dobar"

    if(mail($email, $naslov, $tekst)){
        echo "poruka je uspjesno poslana.<br>";
    }
    else{
        echo"poruka nije uspjesno poslana.<br>";
    }
?>
