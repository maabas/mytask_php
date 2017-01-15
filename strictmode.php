<?php
   // Strict mode
   declare(strict_types=1);
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, '3', 4.1)); //akan generate error sebab atas dah declare strict mode, so bila ada nombor perpuluhan atau apa saja value yang bukan integer, error akan keluar
?>