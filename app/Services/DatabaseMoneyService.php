<?php

namespace App\Services;

use App\Entity\Money;
use App\Requests\CreateMoneyRequest;

class DatabaseMoneyService implements MoneyServiceInterface
{
    public function create(CreateMoneyRequest $request): Money
    {
        // TODO: Implement create() method.
    }

    public function maxAmount(): float
    {
        // TODO: Implement maxAmount() method.
    }
}