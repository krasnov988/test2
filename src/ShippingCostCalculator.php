<?php

namespace App;

class ShippingCostCalculator {
    public function calculateCost(float $distance): float {
        // В реальности здесь был бы расчет стоимости в зависимости от расстояния
        return $distance * 0.5; // Заглушка для примера: 0.5 у.е. за км
    }
}