<?php

    class Scrabble
    {
        function getScore($input_word)
        {
            $one_point = ["A", "E", "I", "O", "U", "L", "N", "R", "S", "T", "a", "e", "i", "o", "u", "l", "n", "r", "s", "t"];
            $two_point = ["D", "G", "d", "g"];
            $three_point = ["B", "C", "M", "P", "b", "c", "m", "p"];
            $four_point = ["F", "H", "V", "W", "Y", "f", "h", "v", "w", "y"];
            $five_point = ["K","k"];
            $eight_point = ["J", "X", "j", "x"];
            $ten_point = ["Q", "Z", "q", "z"];
            $score = 0;

            $input_array = str_split($input_word);

              foreach ($input_array as $letter) {
                if (in_array($letter, $one_point))
                  {
                    $score++;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $two_point))
                  {
                    $score += 2;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $three_point))
                  {
                    $score += 3;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $four_point))
                  {
                    $score += 4;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $five_point))
                  {
                    $score += 5;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $eight_point))
                  {
                    $score += 8;
                  }

              }
              foreach ($input_array as $letter) {
                if (in_array($letter, $ten_point))
                  {
                    $score += 10;
                  }

              }
             return $score;
        }
      }

 ?>
