<?php

namespace src;

class SortDesc implements SortStrategy
{
    public function doSort(array $data): array
    {
        rsort($data);

        return $data;
    }
}