<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
    $ocjene=array(1,2,4,5,5,4,3);
    $broj=count($ocjene);
    $zbroj=array_sum($ocjene);
    $prosjek=$zbroj/$broj;
    echo "unjeli ste ovoliko ocjena ".$broj. "\n";
    echo "zbroj ocjena je ".$zbroj. "\n";
    echo "prosjek unesenih ocjena je ".$prosjek;



?>

</body>
</html>
