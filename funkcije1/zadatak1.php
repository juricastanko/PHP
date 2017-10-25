<?php

$nizslova="hzhsgatshuthszaksjtzshajsuhtszaksutnskaotks";

if(strlen($nizslova)<10){
    echo(substr($nizslova,0,5));
}
elseif(strlen($nizslova)>10){
    echo(substr($nizslova,0,20));

}
?>