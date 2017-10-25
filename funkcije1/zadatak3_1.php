<?php
    function ucenici($ocjene){
        foreach($ocjene as $a){
            $pros=0;
            foreach($a as $b){
                $pros+=$b;

            }
            echo ($pros/3)."<br>";
        }

    }


?>