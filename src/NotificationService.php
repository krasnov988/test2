<?php

namespace App;

class NotificationService {
    public function sendDeliveryNotification(int $parcelId, string $address): void {
        // В реальной ситуации здесь была бы отправка уведомления пользователю
        echo "Notification sent for parcel $parcelId to $address.";
    }
}