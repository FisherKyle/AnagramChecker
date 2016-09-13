<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_passOneLetter()
        {
            //Arrange
            $inputOne = "a";
            $inputTwo = "a";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("Your word is an anagram!", $result);
        }

        function test_failOneLetter()
        {
            //Arrange
            $inputOne = "a";
            $inputTwo = "b";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("Your word is not an anagram.", $result);
        }

        function test_passMultipleLetters()
        {
            //Arrange
            $inputOne = "fox";
            $inputTwo = "oxf";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("Your word is an anagram!", $result);
        }

        function test_passMultipleLetters()
        {
            //Arrange
            $inputOne = "fox";
            $inputTwo = "dog";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("Your word is not an anagram.", $result);
        }

        function test_checkIgnoreCase()
        {
            //Arrange
            $inputOne = "Sad";
            $inputTwo = "das";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("Your word is an anagram!", $result);

        }

        function test_checkNotEmpty()
        {
            //Arrange
            $inputOne = "";
            $inputTwo = "";
            $test_AnagramChecker = new AnagramChecker;

            //Act
            $result = $test_AnagramChecker->generateAnagramResult($inputOne, $inputTwo);

            //Assert
            $this->assertEquals("You must enter a word!", $result);

        }
    }
?>
