# Тестирование системы доставки посылок

## Описание

В этом задании необходимо протестировать класс `DeliveryManager`, который управляет процессом создания доставки посылок. Класс `DeliveryManager` взаимодействует с несколькими зависимостями, и в тестах необходимо использовать **стабы** для подмены этих зависимостей.

### Задача

Вам нужно протестировать различные сценарии работы `DeliveryManager`, чтобы убедиться в корректности выполнения следующих шагов:

1. Проверка корректности адреса доставки с помощью `AddressValidator`.
2. Проверка наличия посылки на складе с помощью `ParcelInventory`.
3. Расчет стоимости доставки на основе расстояния с помощью `ShippingCostCalculator`.
4. Отправка уведомления после успешного создания доставки с помощью `NotificationService`.

Для каждого теста используйте **стабы** для замены реальных зависимостей на заранее определенные значения. Вам необходимо протестировать несколько сценариев, описанных ниже.

## Классы

### 1. `DeliveryManager`

Основной класс, который нужно протестировать. Он использует `AddressValidator`, `ParcelInventory`, `ShippingCostCalculator` и `NotificationService` для создания доставки.

Метод:
- `createDelivery(int $parcelId, string $address, float $distance): string`

### 2. `AddressValidator`

Отвечает за проверку корректности адреса.
- Метод: `validateAddress(string $address): bool`

### 3. `ParcelInventory`

Проверяет наличие посылки для доставки.
- Метод: `isParcelAvailable(int $parcelId): bool`

### 4. `ShippingCostCalculator`

Рассчитывает стоимость доставки на основе расстояния.
- Метод: `calculateCost(float $distance): float`

### 5. `NotificationService`

Отправляет уведомление после успешного создания доставки.
- Метод: `sendDeliveryNotification(int $parcelId, string $address): void`

## Установка

1. Убедитесь, что у вас установлен PHPUnit и composer.
2. Склонируйте репозиторий:

   ```bash
   git clone https://github.com/morozmkhl/phpunit-task-stubs.git
   cd phpunit-task-stubs
3. Установите зависимости:
   ```bash
   composer install

4. Выполните задание и запустите тесты, используя команду ниже или средствами IDE:

   ```bash
   ./vendor/bin/phpunit