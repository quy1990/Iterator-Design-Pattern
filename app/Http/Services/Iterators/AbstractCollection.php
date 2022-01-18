<?php

namespace App\Http\Services\Iterators;

interface AbstractCollection
{
    public function createIterator(): AbstractIterator;
}
