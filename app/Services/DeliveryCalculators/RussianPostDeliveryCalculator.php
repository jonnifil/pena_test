<?php

namespace App\Services\DeliveryCalculators;

class RussianPostDeliveryCalculator implements DeliveryCalculatorContract
{
    private $first_tariff;
    private $second_tariff;
    private $end_first_tariff;

    public function __construct()
    {
        $this->first_tariff = config('params.delivery_tariff.russian_post_first');
        $this->second_tariff = config('params.delivery_tariff.russian_post_second');
        $this->end_first_tariff = config('params.delivery_tariff.russian_post_end_first');
    }

    /**
     * @param int $weight
     * @return int
     */
    public function calculate(int $weight): int
    {
        if ($weight <= $this->end_first_tariff) {
            return $this->first_tariff;
        }
        return $this->second_tariff;
    }
}
