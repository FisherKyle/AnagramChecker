<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_passOneLetter()
        {
            //Arrange
            $input_one = "a";
            $input_two = "a";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_failOneLetter()
        {
            //Arrange
            $input_one = "a";
            $input_two = "b";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_passMultipleLetters()
        {
            //Arrange
            $input_one = "fox";
            $input_two = "oxf";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_failMultipleLetters()
        {
            //Arrange
            $input_one = "fox";
            $input_two = "dng";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_checkIgnoreCase()
        {
            //Arrange
            $input_one = "Sad";
            $input_two = "das";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(true, $result);

        }

        function test_checkNotEmpty()
        {
            //Arrange
            $input_one = "";
            $input_two = "";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($input_one, $input_two);

            //Assert
            $this->assertEquals(true, $result);

        }
    }
?>
