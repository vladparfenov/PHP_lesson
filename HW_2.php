<?php

function mySerialize(array $input)
{
    $result = '{';

    foreach ($input as $key => $value) {

        if (is_array($value)) {
            $result .= '"' . $key . '":' . '' . mySerialize($value) . '';

            continue;
        }



            if (is_float($value)) {
                if (array_key_last($input) !== $key[0]) {

                    $result .= '"' . $key . '":' . '' . $value . '';
                }
            } else {
                if (is_int($value)) {
                    $result .= '"' . $key . '":' . '' . $value . ',';
                } else {
                    if (array_key_last($input) !== $key) {

                        $result .= '"' . $key . '":' . '"' . $value . '",';
                    } else {
                        $result .= '"' . $key . '":' . '"' . $value . '"';
                    }
                }
            }


            //разделение между парой ключ/значение


            if (array_key_last($input) !== $key) {
                $result .= '';
            }


        }
        // тут добавление сtрок
        if (array_key_last($input) === $key) {
            $result .= '}';
        }
        $result .= '';

        return $result;

    }

    $testArray = [

        "id" => 1,
        "name" => "Leanne Graham",
        "username" => "Bret",
        "email" => "Sincere@april.biz",
        "address" => [
            [
                "street" => "Kulas Light",
                "suite" => "Apt. 556",
                "city" => "Gwenborough",
                "zipcode" => "92998-3874",
                "geo" => [
                    "lat" => -37.3159,
                    "lng" => 81.1496,
                ]
            ],
            [
                "street" => "Victor Plains",
                "suite" => "Suite 879",
                "city" => "Wisokyburgh",
                "zipcode" => "90566-7771",
                "geo" => [
                    "lat" => -43.9509,
                    "lng" => -34.4618,
                ]
            ]
        ],
        "phone" => "1-770-736-8031 x56442",
        "website" => "hildegard.org",
        "company" => [
            "name" => "Romaguera-Crona",
            "catchPhrase" => "Multi-layered client-server neural-net",
            "bs" => "harness real-time e-markets"
        ]
        ,
        [
            "id" => 2,
            "name" => "Ervin Howell",
            "username" => "Antonette",
            "email" => "Shanna@melissa.tv",
            "address" => [
                [
                    "street" => "Victor Plains",
                    "suite" => "Suite 879",
                    "city" => "Wisokyburgh",
                    "zipcode" => "90566-7771",
                    "geo" => [
                        "lat" => -43.9509,
                        "lng" => -34.4618,
                    ]
                ],
                [
                    "street" => "Kulas Light",
                    "suite" => "Apt. 556",
                    "city" => "Gwenborough",
                    "zipcode" => "92998-3874",
                    "geo" => [
                        "lat" => -37.3159,
                        "lng" => 81.1496
                    ]
                ]
            ],
            "phone" => "010-692-6593 x09125",
            "website" => "anastasia.net",
            "company" => [
                "name" => "Deckow-Crist",
                "catchPhrase" => "Proactive didactic contingency",
                "bs" => "synergize scalable supply-chains"
            ]
        ]
    ];
    /*$testArray = [
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
    ];*/
    echo 'В таком формате должно отображаться' . PHP_EOL;
    echo json_encode($testArray) . PHP_EOL . "А так отображается у нас" . PHP_EOL;

    echo mySerialize($testArray) . PHP_EOL;


    echo json_encode($testArray) === mySerialize($testArray) ? "pass\n" : "fucked up\n";



//see functions that start with is_ (is_int, is_string........)