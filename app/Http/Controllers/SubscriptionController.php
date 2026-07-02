<?php

namespace App\Http\Controllers;

use App\Services\SubscriptionService;

class SubscriptionController
{
    public function activate(array $body): array
    {
        $service = new SubscriptionService();
        try {
            $status = $service->activate($body['plan'] ?? '');
            return ['status' => 200, 'body' => ['status' => $status]];
        } catch (\InvalidArgumentException $error) {
            return ['status' => 422, 'body' => ['error' => $error->getMessage()]];
        }
    }
}
