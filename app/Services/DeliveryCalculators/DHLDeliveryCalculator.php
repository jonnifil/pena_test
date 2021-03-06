<?php

namespace App\Services\DeliveryCalculators;

class DHLDeliveryCalculator implements DeliveryCalculatorContract
{
    private $tariff;

    public function __construct()
    {
        $this->tariff = config('params.delivery_tariff.dhl');//todo: from DB tariff
    }

    /**
     * @param int $weight
     * @return int
     */
    public function calculate(int $weight): int
    {
        return $weight * $this->tariff;
    }
}
