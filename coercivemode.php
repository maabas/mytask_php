<?php
   // Coercive mode
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(25, '3.5', 4.5)); // walaupon ada perpuluhan di sini, tetapi sebab dah declare di atas dia type int not float, so hanya no bulat sahaja diterima, contoh 3.5 jadi 3 jugak bukan 4.
?>