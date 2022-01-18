<?php

namespace App\Http\Services\Iterators;

use Exception;
use Traversable;

class WordCollection implements \IteratorAggregate
{

    private $items;

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }
    /**
     * @inheritDoc
     */
    public function getIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): AlphabeticalOrderIterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}
