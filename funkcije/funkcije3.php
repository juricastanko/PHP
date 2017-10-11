<?php
function godine($a,$b){
    if($b-$a==1){
       echo "star si jednu godinu";
    }
    if($b-$a==(-1)){
        echo "rodit ces se za jednu godinu";
    }
    if($a==$b){
        echo "roden si ove godine";
    }
    $razlika = $b-$a;
    if($razlika < 1){
        echo " biti ces roden za ".-($razlika)." godina";
    }
    if($razlika > 1){
        echo "imas ".$razlika." godina";
    }

}
godine(2200,2017)

?>