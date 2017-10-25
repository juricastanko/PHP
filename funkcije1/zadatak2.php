<?php
    $datum=date("d.m.y");
    echo $datum."<br>";

    $dan=date("d");
    echo "dan: ".$dan."<br>";

    $mjesec=date("m");
    echo "mjesec: ".$mjesec."<br>";

    $godina=date("y");
    echo "godina: 20".$godina."<br>";

    $sati=date("h");
    echo "sati: ".$sati."<br>";

    $minute=date("i");
    echo "minute: ".$minute."<br>";

    $sekunde=date("s");
    echo "sekunde: ".$sekunde."<br><br>";

    echo $sati.":".$minute.":".$sekunde;


?>