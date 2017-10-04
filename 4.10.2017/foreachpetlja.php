<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <?php
    $zbroj=0;
    $ocjene=array("hrvatski"=>4,"matematika"=>5,"povijest"=>4);
    $ocjenebroj=count($ocjene);
    foreach ($ocjene as $brojevi){
        echo($brojevi."<br>");
        $zbroj+=$brojevi;

    }
    $prosjek=$zbroj/$ocjenebroj;
    echo($prosjek);



    ?>




</body>
</html>

