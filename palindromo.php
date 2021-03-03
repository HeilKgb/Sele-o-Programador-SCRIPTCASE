<?php
function PALINDROMO($string)
{
  //limpar a string 
  $string = str_replace(" ", "", $string);
  $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
  //reverte a string
  $new_string = strrev($string);

  if ($string == $new_string) {
    echo "true";
  } else {
    echo "false";
  }
}

$string = "a";
PALINDROMO($string);
