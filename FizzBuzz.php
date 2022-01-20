<?php


class FizzBuzz
{

    public function count(int $number):string{
        if($number%3==0)
            return "Fizz";
        return strval($number);
    }
}