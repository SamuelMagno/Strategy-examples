<?php

namespace src;

interface SortStrategy 
{
    public function doSort(array $data): array;
}
