<?php

    class Weekday
    {
        function returnWord($input1)
        {
            $test_result = is_string($input1);
            return $test_result;
        }
        function findDay($input1)
        {
            $character_array = str_split($input1);
            $pattern = '/[0123456789]/';
            $month = "";
            $day = "";
            $year = "";
            $counter = 0;
            foreach ($character_array as $digit) {
              if ((preg_match($pattern,$digit)) == 1) {
                  if ($counter == 0) {
                    $year .= $digit;
                  } elseif ($counter == 1) {
                    $month .= $digit;
                  } elseif ($counter == 2) {
                    $day .= $digit;
                  }
              } elseif ((preg_match($pattern,$digit)) == 0) {
                $counter++;
              }
            }
            $result = date("l", mktime(0,0,0,$month,$day,$year));
            return $result;
        }
    }
 ?>
