<?php

require __DIR__. '/vendor/autoload.php';

use src\SortContext;
use src\SortAsc;
use src\SortDesc;
use src\SortStrategy;

echo "Strategy Example";

$data = ['4,3,2,5,6,1'];

$sort = new SortContext(new SortAsc());

var_dump($sort->sortData($data));