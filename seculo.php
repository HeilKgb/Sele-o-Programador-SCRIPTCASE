<?php
$ano = "1701";

function seculo($ano)
{
  $s = substr($ano, 2);
  if ($s == 00) :
    $m = round($ano / 100);
    echo "Século = " . $m;
  else :
    $m = ceil($ano / 100);
    echo "Século = " . $m;
  endif;
}
seculo($ano);
