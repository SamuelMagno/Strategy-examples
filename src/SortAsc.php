<?php

namespace src;

class SortAsc implements SortStrategy 
{
    public function doSort(array $data): array
    {
        rsort($data);
        
        return $data;
    }
}