<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    $datumi = array('2014-11-01', '2015-02-12', '2015-02-03');
    echo "najnoviji datum: ". max($datumi)."\n";
    echo "najstariji datum: ". min($datumi)."\n";
    ?>
</body>

</html>