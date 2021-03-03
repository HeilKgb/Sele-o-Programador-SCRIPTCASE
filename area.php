<?php
function area($n)
{
  $a = 1;
  $b = 5;
  for ($i = 1; $i < $n; $i++) {
    $c = $b + (4 * ($n - 1));
    $b = $c;

    return $c;
  }
  if ($n == 1) :
    return $a;
  endif;
}
echo area(4);
