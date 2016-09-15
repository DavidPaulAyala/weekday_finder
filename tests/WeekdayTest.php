<?php

    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_return_word()
        {
            //Arrange
            $test_Weekday = new Weekday;
            $first_input = "7/4/1776";

            //Act
            $result = $test_Weekday->returnWord($first_input);

            //Assert
            $this->assertEquals(true, $result);
        }
        function test_find_day()
        {
            //Arrange
            $test_Weekday = new Weekday;
            $first_input = "7/4/1776";

            //Act
            $result = $test_Weekday->findDay($first_input);

            //Assert
            $this->assertEquals("Thursday", $result);
        }
    }
 ?>
