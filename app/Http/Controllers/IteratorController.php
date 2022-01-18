<?php

namespace App\Http\Controllers;

use App\Http\Services\Fans\Fan;
use App\Http\Services\Fans\Remote;
use App\Http\Services\Fans\TurnOffCommand;
use App\Http\Services\Fans\TurnOnCommand;
use App\Http\Services\Iterators\WordCollection;

class IteratorController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index(): void
    {
        $collection = new WordCollection();
        $collection->addItem('first');
        $collection->addItem('second');
        $collection->addItem('third');

        foreach ($collection->getIterator() as $item) {
            echo $item . '\n';
        }
    }
}
