<?php


class A
{
    public $public = 4;
    protected $protected = 5;
    private $privat = 7;
}

class B extends A
{
    public function getProtected()
    {
        return $this->protected;
    }

}

$ff = new B();
$rr = new A();
$rr->