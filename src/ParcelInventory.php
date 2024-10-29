<?php

namespace App;

class ParcelInventory {
    public function isParcelAvailable(int $parcelId): bool {
        // Проверяет, доступен ли товар на складе
        return rand() % 2 == 1; // Заглушка для примера
    }
}