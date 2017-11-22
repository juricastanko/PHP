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








?>