<?php


use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    public function testCountGiven1Return1(){
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count();
        //Assert
        $this->assertEquals("1",$actual);
    }
}
