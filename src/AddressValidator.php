<?php

namespace App;

class AddressValidator {
    public function validateAddress(string $address): bool {
        // В реальной ситуации здесь была бы логика проверки адреса (например, через API)
        return rand() % 2 == 1; // Заглушка для примера
    }
}