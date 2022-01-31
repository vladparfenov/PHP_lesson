<?php


class ArrayWrapper
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function toArray(): array
    {
        return $this->items;
    }

    public function addElement(int|string $key, mixed $value)
    {
        $this->items[$key] = $value;
    }

//    public function getElement(int|string $key)
//    {
//        if (array_key_exists($key, $this->items)) {
//            return $this->items[$key];
//        }
//        return 'nety';
//    }

    public function checkElement($value)
    {
        if (array_search($value, $this->items)) {
            //$e = array_search($value, $this->items);
            return 'Да существует ' . PHP_EOL;
        }
        return 'Такого элемента нет' . PHP_EOL;
    }

    public function getIndexFromValue($value)
    {
        $index = array_search($value, $this->items);
        echo $index;
    }

    public function addElementAtStart($value)
    {
        array_unshift($this->items, $value);

        return $this->items;
    }

    public function addElementAtEnd($value)
    {
        $this->items[] = $value;

        return $this->items;
    }

    public function getFirstElement()
    {
        $firstIndex = array_key_first($this->items);

        return $this->items[$firstIndex];
    }

    public function getLastElement()
    {
        $lastIndex = array_key_last($this->items);

        return $this->items[$lastIndex];
    }
    public function getLastElementAnotherMetod()
    {
        $lastIndex = end( $this->items);

        return $lastIndex;
    }


}

$testArray = [11, 32, 44, 'ffff'];

$wrappedTestArray = new ArrayWrapper($testArray);

print_r($testArray);

$wrappedTestArray->addElement('ff22', 1444);

print_r($wrappedTestArray->toArray());


echo '1. Существует ли элемент в массиве?' . PHP_EOL;

print_r($wrappedTestArray->checkElement('32')) . PHP_EOL;

echo '2. Mетод который отдаст индекс переданного элемента в массиве' . PHP_EOL;

echo $wrappedTestArray->getIndexFromValue(32) . PHP_EOL;

echo '3. Mетод для добавления элемента в начало массива' . PHP_EOL . 'Это делает и первый метод - 
"array_search", но добавим еще - "array_unshift"' . PHP_EOL;

print_r($wrappedTestArray->addElementAtStart('Жепка')) . PHP_EOL;

echo '4. Метод для добавления элемента в конец массива' . PHP_EOL;

print_r($wrappedTestArray->addElementAtEnd('В конец, пожалуйста.')) . PHP_EOL;

echo '5. Метод который отдаст первый элемент в массиве' . PHP_EOL;

echo $wrappedTestArray->getFirstElement() . ' - это первый элемент массива' . PHP_EOL;

echo '6. Метод который отдаст последний элемент в массиве' . PHP_EOL;

echo $wrappedTestArray->getLastElement() . ' - это последний элемент массива' . PHP_EOL;

echo $wrappedTestArray->getLastElementAnotherMetod() . ' - это метод end' . PHP_EOL;











