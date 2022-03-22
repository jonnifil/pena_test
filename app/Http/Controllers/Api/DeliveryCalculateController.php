<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryCalculateRequest;
use App\Services\DeliveryCalculators\DHLDeliveryCalculator;
use App\Services\DeliveryCalculators\RussianPostDeliveryCalculator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeliveryCalculateController extends Controller
{
    /**
     * @param DeliveryCalculateRequest $request
     * @param DHLDeliveryCalculator $deliveryCalculator
     * @return JsonResponse
     */
    public function calculateDHL(
        DeliveryCalculateRequest $request,
        DHLDeliveryCalculator $deliveryCalculator
    ): JsonResponse
    {
        $weight = $request->validated()['weight'];

        return response()->json([
            'weight' => $weight,
            'price' => $deliveryCalculator->calculate($weight)
        ]);
    }

    /**
     * @param DeliveryCalculateRequest $request
     * @param RussianPostDeliveryCalculator $deliveryCalculator
     * @return JsonResponse
     */
    public function calculateRussianPost(
        DeliveryCalculateRequest $request,
        RussianPostDeliveryCalculator $deliveryCalculator
    ): JsonResponse
    {
        $weight = $request->validated()['weight'];

        return response()->json([
            'weight' => $weight,
            'price' => $deliveryCalculator->calculate($weight)
        ]);
    }
}
