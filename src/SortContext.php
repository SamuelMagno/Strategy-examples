<?php

namespace src;

use src\SortStrategy;

class SortContext {

    private SortStrategy $strategy;

    public function __construct(SortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(SortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sortData($data): array {
        return $this->strategy->doSort($data);
    }
}