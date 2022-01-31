<?php

function compress(string $input)
{
    $result = '';

    $counter = 1;
    $inputLength = strlen($input) - 1;

    for ($i = 0; $i < $inputLength; $i++) {

        if ($input[$i] === $input[$i + 1]) {
            ++$counter;

            continue;
        }

        $result .= $input[$i] . $counter;
        $counter = 1;
    }

    $result .= $input[$inputLength] . $counter;

    return $result;
}

function decompress(string $input)
{
    //s1a5s8d3q7f35
    $inputLength = strlen($input);
    $currentLetter = $input[0];
    $times = 0;
    $result = '';

    for($i = 1; $i < $inputLength; $i++) {
        if (ctype_alpha($input[$i])) {
            $result .= str_pad('', $times, $currentLetter);
            $times = 0;
            $currentLetter = $input[$i];

            continue;
        }

        $times = $times * 10 + (int) $input[$i];
    }

    return $result . str_pad('', $times, $currentLetter);
}

$testString = 'saaaaassssssssdddqqqqqqqfffffffffffffffffffffffffffffffffffaaaav';

echo compress($testString) . PHP_EOL;

echo decompress(compress($testString)) . PHP_EOL;
