<?php class DateDifference {
  public static function calculate($date1, $date2) {
    $diff = strtotime($date2) - strtotime($date1);
    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
    return "Difference : $years years, $months months, $days days";
  }
}

$date1 = "1981-11-03";
$date2 = "2013-09-04";
$result = DateDifference::calculate($date1, $date2);
echo $result;
?>