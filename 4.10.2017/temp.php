<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$temp=array(78,60,62,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,62,65,74,64,68,73,75,79,73);
for($i=0;$i<5;$i++){
    $min=array();
    $minimum=min($temp);
    $maksimum=max($temp);
    echo($minimum).",";
}
?>
</body>
</html>
