<?php

    class AnagramChecker {

        function formatWordOne() {
            $lower_input_one = $inputOne;
            $lower_input_one = strtolower($lower_input_one);
            $split_input_one = str_split($inputOne);
            $sorted_input_one = sort($split_input_one);
            $formatted_input_one = implode($sorted_input_one);
        }

        function formatWordTwo() {
            $lower_input_two = $inputTwo;
            $lower_input_two = strtolower($lower_input_two);
            $split_input_two = str_split($inputTwo);
            $sorted_input_two = sort($split_input_two);
            $formatted_input_two = sort($sorted_input_two);
        }

        function generateAnagramResult() {
            if ($formatted_input_one === $formatted_input_two) {
                return "Your word is an anagram!";
            } else {
                return "Your word is not an anagram."
            }
        }

    }

 ?>
