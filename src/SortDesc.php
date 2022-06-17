<?php

namespace src;

class SortDesc implements SortStrategy
{
    public function doSort(array $data): array
    {
        sort($data);

        return $data;
    }
}