<?php

class Rectangle
{
    public float $a; // поля
    public float $b;

//    public function __toString():string
//    {
//        return 'hello';
//    }
public function __invoke(string $a)
{
    // TODO: Implement __invoke() method.
    return 'pilivet' . $a;
}
}


$ff = new Rectangle(12, 34);
echo $ff('rtwertwerwer') . PHP_EOL;

