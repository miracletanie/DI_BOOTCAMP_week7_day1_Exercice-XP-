<?php 
class Factoriel {
    public static function calculate($number) {
      if ($number < 0) {
        return "Impossible de calculer la factorielle d'un nombre négatif.";
      }
      $result = 1;
      for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
      }
      return $result;
    }
  }
  
  $number = 5;
  $result = Factoriel::calculate($number);
  echo "Factorielle de $number est $result";
  ?>