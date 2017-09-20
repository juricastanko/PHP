<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
    $b=2;
    $c=8;
    $d=10;
    if($d<$c || $d>$c && $c>$b){
        echo"istina";
    }
    switch($c==$b+6){
        case($c):
            echo"<br> b je za 6 manji od c";
            break;
        case($b):
            echo"b je jednak c";
            break;
    }
    switch($d==$c+2){
        case($d):
            if($d%5==0){
                if($c%2==0){
                    echo"<br> c je za 2 manji od d,d je dijeljiv sa 5, a c sa 2";
                }
                else if($c%2!=0){
                    echo"<br>c je za 2 manji od d,d je dijeljiv sa 5, a c nije dijeljiv sa 2";
                }
            }
        }

?>
</body>
</html>


/**
 */