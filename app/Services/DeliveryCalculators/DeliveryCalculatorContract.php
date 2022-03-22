<?php

namespace App\Services\DeliveryCalculators;

interface DeliveryCalculatorContract
{
    public function calculate(int $weight): int;
}
