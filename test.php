<?php
/*
$date_sec = strtotime("now") + 1000000000;

echo date("Y.m.d", $date_sec);
*/

//declare(strict_types=1);

declare(strict_types=1);

function from(DateTimeImmutable $date): DateTimeImmutable

{

    $date_new = $date->format("Y-m-d H:i:s") ;
$seconds = 1000000000;
$result = date("Y-m-d H:i:s", (strtotime($date_new) + $seconds));
$expected = date_format(DateTimeInterface($result) ,"Y-m-d H:i:s");
return $expected;
}


from()