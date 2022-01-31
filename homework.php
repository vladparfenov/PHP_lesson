<?php


abstract class ArrayWrapper implements RequestDtoInterface
{
    private array $items;

    public static function staticSetElementByRef(array &$items, int|string $key, mixed $value): void
    {
        $items[$key] = $value;
    }

    public static function staticSetElement(array &$items, int|string $key, mixed $value): void
    {
        $items[$key] = $value;
    }


    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function toArray(): array
    {
        return $this->items;
    }

    public function setElement(int|string $key, mixed $value)
    {
        $this->items[$key] = $value;
    }

    public function getElement(int|string $key)
    {
        return $this->items[$key] ?? null;
    }

    public function isElementExists($value)
    {
        return in_array($value, $this->items, true);
    }

    public function getKey($value)
    {
        return array_search($value, $this->items);
    }

    public function unshift($value)
    {
        array_unshift($this->items, $value);
    }

    public function push($value)
    {
        $this->items[] = $value;

        return $this->items;
    }

    public function first()
    {
        return array_shift($this->items);
    }

    public function last()
    {
        return end( $this->items);
    }

    public function isKeyExists($key)
    {
        return key_exists($key, $this->items);
    }
}



interface RequestDtoInterface
{
    public static function staticSetElementByRef(array &$items, int|string $key, mixed $value): void;

    public static function staticSetElement(array &$items, int|string $key, mixed $value): void;

    public function  __construct(array $items);

    public function toArray(): array;

    public function setElement(int|string $key, mixed $value);

    public function getElement(int|string $key);

    public function isElementExists($value);

    public function getKey($value);

    public function unshift($value);

    public function push($value);

    public function first();

    public function last();

    public function isKeyExists($key);
}