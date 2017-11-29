<?php
    $email=POST["email"];
    $naslov=POST["naslov"];
    $tekst=POST["tekst"];

    echo "Primatelj: ".$email."<br>";
    echo "Naslov: ".$naslov."<br>";
    echo "Tekst poruke: ".$tekst."<br>";

    ini_set("SMTP","smtp.gmail.com");
    ini_set("sendmail_from","tevelly@gmail.com");

    if(mail($email, $naslov, $tekst)){
        echo "poruka je uspjesno poslana.<br>";
    }
    else{
        echo"poruka nije uspjesno poslana.<br>";
    }
?>