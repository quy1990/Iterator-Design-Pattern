<?php

namespace App\Http\Services\Iterators;

interface AbstractIterator
{
    public function first(): Item;
    public function next(): Item;
    public function isDone(): bool;
    public function currentItem(): Item;
    public function step(): int;
}
