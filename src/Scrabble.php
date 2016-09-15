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
                foreach ($one_point as $one) {
                  if($letter === $one) {
                    $score++;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($two_point as $two) {
                  if($letter === $two) {
                    $score += 2;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($three_point as $three) {
                  if($letter === $three) {
                    $score += 3;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($four_point as $four) {
                  if($letter === $four) {
                    $score += 4;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($five_point as $five) {
                  if($letter === $five) {
                    $score += 5;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($eight_point as $eight) {
                  if($letter === $eight) {
                    $score += 8;
                  }
                }
              }
              foreach ($input_array as $letter) {
                foreach ($ten_point as $ten) {
                  if($letter === $ten) {
                    $score +=10;
                  }
                }
             }
             return $score;
        }
      }

 ?>
