<?php

namespace App\Services\DeliveryCalculators;

interface DeliveryCalculatorContract
{
    /**
     * @param int $weight
     * @return int
     */
    public function calculate(int $weight): int;
}
