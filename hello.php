 <?php

$i = 4;

/*
*/


//echo "Hello world\n";
$test = [1, 2, 3, 4, 'hello', $i];
//var_dump($test);

$test[] = 5.34;
//var_dump($test);
array_unshift($test, 'qwerty');
//var_dump($test);
$test['wser'] = 345; 
//var_dump($test);
//echo $test[3].PHP_EOL.'code_pilots_training'.PHP_EOL.$i.PHP_EOL.$test[0]."\n"."{$test[1]}\n";

$lol = 'world';
//echo $lol[0]."\n";

$a = null;




/*if ($a === "") {
	echo 'FALSE' . PHP_EOL   '/n'
} else if ($a == '1') {
	echo 'TRUE' . PHP_EOL;
} else {
	echo 'VAHOB PIDOR' . PHP_EOL;
}
*/


//$d = range(4,10);

//print_r($d);

/*if ($d[0] % 2 === 0) {
	echo "0" . PHP_EOL;
}

if ($d[1] % 2  === 0) {

 echo "1" . PHP_EOL;
}

if ($d[6] % 2  === 0) {

 echo "6" . PHP_EOL;
}*/

/*foreach($d as $index => $item) {
	if ($item % 2 === 0) {
		echo $index . PHP_EOL;
}
}
*/





/*$digits = range(1,10);

foreach($digits as $index => $digit){
	if (isOdd($digit)) {
		echo "Value({$digit}) under key({$index}) is odd!\n";
	}
}
*/
function isOdd($a)
{
	return $a;
}

$digits = range(1,10);


print_r ($digits);
echo 'то что выше выводит функция print_r' . PHP_EOL;
echo 'то что ниже это имитация метода print_r' . PHP_EOL;
echo 'Array' . PHP_EOL . '(' . PHP_EOL;

foreach($digits as $index => $digit){
	//echo 'Arrayaaa' ;
	  if (isOdd($digit)) {
		    echo "    [{$index}] => {$digit} \n";
}
}
echo  ')' . PHP_EOL;








