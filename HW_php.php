<?php

$digits = range(1,10);

echo 'Это выводит метод "print_r"' . PHP_EOL;

print_r ($digits);

echo 'А это уже имитация метода print_r' . PHP_EOL . 'Array'  .PHP_EOL . '(' . PHP_EOL;


foreach($digits as $index => $digit){

		    echo "    [{$index}] => {$digit} \n"; // пробелы тут для более правильного отображения в консоли


}
echo  ')' . PHP_EOL;
