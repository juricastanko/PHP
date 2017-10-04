<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="1">
    <?php
    for ($i=1;$i<11;$i++){
        echo"<tr><td>".$i."</tr></td>";
        for($j=1;$j<11;$j++){
            echo"<td>".($i*$j)."</td>";

        }


    }

    ?>
</table>



</body>
</html>

