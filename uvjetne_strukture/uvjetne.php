<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
     $a=10;
     $b=15;
     $c=25;
     if($a>$b){
         echo "a je manji od b";
     }
     else if($a<$b){
         echo "a je veci od b";
     }
     switch($c){
         case($b):
             echo"<br> c je isti kao b";
             break;
         case($c):
             echo"<br> c je istinit";
             break;
     }
?>

</body>
</html>

