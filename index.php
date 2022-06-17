<?php

require __DIR__. '/vendor/autoload.php';

use src\SortContext;
use src\SortAsc;
use src\SortDesc;
use src\SortStrategy;

echo "Strategy Example <br/><br/>";

$data = [5,3,2,4,6,1];

echo "Sort Asc: ";
$context = new SortContext(new SortAsc());
print_r($context->sortData($data));

echo "<br/><br/>";

echo "Sort Desc: ";
$context->setStrategy(new SortDesc());
print_r($context->sortData($data));
