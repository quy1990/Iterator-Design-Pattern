<?php

namespace App\Http\Services\Iterators;

use IteratorAggregate;

class AlphabeticalOrderIterator implements \Iterator
{
    private $position = 0;
    private $reserve = false;
    private $collection;

    public function __construct(IteratorAggregate $collection, bool $reserve = false)
    {
        $this->collection = $collection;
        $this->reserve = $reserve;
    }

    public function rewind(): void
    {
        $this->position = $this->reserve ? count($this->collection->getItems() -1) : 0;
    }

    public function current(): string
    {
       return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position += ($this->reserve ? -1 : 1);
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
