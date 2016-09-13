<?php

    class AnagramChecker {

        function generateAnagramResult($input_one, $input_two) {
            $lowered_input_one = strtolower($input_one);
            $lowered_input_two = strtolower($input_two);
            $split_input_one = str_split($lowered_input_one);
            $split_input_two = str_split($lowered_input_two);
            sort($split_input_one);
            sort($split_input_two);
            if ($split_input_one === $split_input_two) {
                echo "Your word is an anagram!";
                return true;
            } else if ($split_input_one != $split_input_two) {
                echo "Your word is not an anagram.";
                return false;
            } else {
                echo "You did stuff wrong, try again.";
            }
        }

    }

 ?>
