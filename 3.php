<?php

function bilang($x, $y){
  $st = 1;
  $nd = 1;

  $i = $j = 2;
  while($st<=$y){
    while($nd<=$x){
      $p=0;
      if ($i == 2) {
        echo $i." ";
        $i++;
        $nd++;
      }else {
        while($j<=$i){
          if ($i % $j == 0) {
            $p++;
          }
          $j++;
        }
        if ($p==0) {
          echo $i." ";
          $nd++;
        }
        $i++;
      }
    }
    echo "<br>";
    $st++;
  }
}

echo bilang(4,3);
