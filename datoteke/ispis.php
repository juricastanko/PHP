<?php
$datoteka2=fopen("podaci.txt","r");

    echo("<table border='5'>
<tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Adresa</th>
    <th>Mjesto stanovanja</th>
    <th>Broj telefona</th>
</tr>");

echo"<tr align='center'>";
  while(!feof($datoteka2)){
    echo"<td>";
    echo fgets($datoteka2);
    echo"</td>";

  };
echo"</tr></table>"
   
$brojac = 0;
while ($redak = fgets($datoteka2, 100)){
    if($brojac == 5){
        $brojac = 0;
        echo "</tr><tr>";
    }
    $brojac++;
    echo ("<td>" .
          $redak . 
          "</td>");








?>
