<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase{

        function test_Scrabble_score1(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "A";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("1", $result);
        }
        function test_Scrabble_score2(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "D";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("2", $result);
        }
        function test_Scrabble_score3(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "B";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("3", $result);
        }
        function test_Scrabble_score4(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "F";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("4", $result);
        }
        function test_Scrabble_score5(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "K";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("5", $result);
        }
        function test_Scrabble_score8(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "J";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("8", $result);
        }
        function test_Scrabble_score10(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "Q";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("10", $result);
        }
        function test_Scrabble_scoreWord(){
          //Arrange
          $test_Scrabble = new Scrabble;
          $input = "Johnson";
          //Act
          $result = $test_Scrabble->getScore($input);
          //Assert
          $this->assertEquals("17", $result);
        }
      }
