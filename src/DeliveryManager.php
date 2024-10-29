<?php


namespace App;

class DeliveryManager {
    private AddressValidator $addressValidator;
    private ParcelInventory $parcelInventory;
    private ShippingCostCalculator $costCalculator;
    private NotificationService $notificationService;

    public function __construct(AddressValidator $addressValidator, ParcelInventory $parcelInventory,
                                ShippingCostCalculator $costCalculator, NotificationService $notificationService) {
        $this->addressValidator = $addressValidator;
        $this->parcelInventory = $parcelInventory;
        $this->costCalculator = $costCalculator;
        $this->notificationService = $notificationService;
    }

    public function createDelivery(int $parcelId, string $address, float $distance): string {
        if (!$this->addressValidator->validateAddress($address)) {
            return "Invalid address.";
        }

        if (!$this->parcelInventory->isParcelAvailable($parcelId)) {
            return "Parcel not available.";
        }

        $cost = $this->costCalculator->calculateCost($distance);
        $this->notificationService->sendDeliveryNotification($parcelId, $address);

        return "Delivery created. Cost: $cost";
    }
}