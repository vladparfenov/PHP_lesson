<?php

function mySerialize(array $input)
{
    $result = '';

    foreach ($input as $key => $value) {
        if (is_array($value)) {
            if (is_int($key)) {
                //$result .= ',"' . $key . '":' . '{' . mySerialize($value) . '}';
                continue;
            } else {

                    $result .= '"' . $key . '":' . '{' . mySerialize($value) . '}'; //правильная строка
                continue;

            }
        }
        if (is_int($value)) {
            $result .= '"' . $key . '":' . '' . $value . '';
        } else {
            $result .= '"' . $key . '":' . '"' . $value . '"';
        }

        //разделение между парой ключ/значение
        if (array_key_last($input) !== $key) {
            $result .= ',';
        }



    }


    return $result;

}

$testArray = [
    'name' => 'Peter',
    'age' => 11,
    'gender' => 'male',
    'mother' => [
        'name' => 'Masha',
        'age' => 23,
        'gender' => 'male',
        'children' => [
            'ff' => 'ff',
        ]
    ],
    'father' => [
        'name' => 'Masha',
        'age' => 23,
        'gender' => 'male',
        'children' => [
            'ff' => 'ff',
        ]
    ],
];
echo 'В таком формате должно отображаться' . PHP_EOL;
echo json_encode($testArray) . PHP_EOL . "А так отображается у нас" . PHP_EOL;

echo mySerialize($testArray) . PHP_EOL;


echo json_encode($testArray) === mySerialize($testArray) ? "pass\n" : "fucked up\n";



//see functions that start with is_ (is_int, is_string........)