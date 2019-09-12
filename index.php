<?php

function entofrdateconverter($en) {
   $b=explode('-', $en);
   echo $b[2]."-".$b[1]."-".$b[0] ; 
}
$a="2019-09-11";

entofrdateconverter($a) ; 

?>
