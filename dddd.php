<?php

class Rectangle
{
    public float $a; // поля
    public float $b;

    public function setA(float $a)
    {
        $this->a = $a;
    }

    public function setB(float $b)
    {
        $this->b = $b;
    }



    public function getA():float
    {
        return $this->a;
    }

    public function getB():float
    {
        return $this->b;
    }


    public function PrintSides()     // метод
    {
        echo $this->a . ' ' . $this->b . PHP_EOL;
    }

    public function PrintSquare()
    {
        echo $this->a * $this->b . PHP_EOL;
    }

    public function PrintPerimeter()
    {
        echo ($this->a + $this->b) * 2 . PHP_EOL;
    }
}


$rect = new Rectangle();

$rect->setA(5);
$rect->setB(8);
$rect->getA();
$rect->getB();
$rect->a = 8;


$rect->PrintSides();
$rect->PrintSquare();
$rect->PrintPerimeter();


