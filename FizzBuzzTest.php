<?php


use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    public function testCountGiven1Return1(){
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(1);
        //Assert
        $this->assertEquals("1",$actual);
    }

    public function testCountGiven3ReturnFizz(){
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(3);
        //Assert
        $this->assertEquals("Fizz",$actual);
    }
}
