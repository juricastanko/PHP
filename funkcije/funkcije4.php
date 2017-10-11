<?php
    function polindrom($a){
        if ($a=strrev($a)){
            echo("rijec ".$a." je polindrom.");
        }
        else
            echo "rijec ".$a." nije polindrom.";

    }
    polindrom("php")

?>