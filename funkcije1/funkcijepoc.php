<?php
   $niz="a      .O misEviMa i ljudima \n";
   echo $niz."<br>";
   $niz=trim($niz);
   echo $niz."<br>";

   $malaslova=strtolower($niz);
   echo $malaslova."<br>";
   $velikaslova=strtoupper($niz);
   echo $velikaslova."<br>";

   echo strlen($niz)."<br>";
   $niz1=str_replace("O","aaaaaa",$niz);
   echo $niz1."<br>";




?>