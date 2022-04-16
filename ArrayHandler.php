<?php

class Collection
{
    public function __construct(protected array $items = []) {}

    public function filter($callback)
    {
        return new static(array_filter($this->items , $callback));
    }

    public function map($callback)
    {
        return new static(array_map($callback ,$this->items));
    }

    public function merge(array $items)
    {
        return new static(array_merge($this->items , $items));
    }

    public function all()
    {
        return $this->items;
    }
}


$collect = new Collection([1,2,3,4,5,6,7,8,9,10]);

$items1 = $collect
            ->filter(fn($item) =>  $item % 2 == 0);

$items2 = $collect
            ->map(fn($item) => $item * 2);


$items3 = $collect
            ->map(fn($item) => $item * 4);

var_dump($items1->all());
var_dump($items2->all());
var_dump($items3->all());


