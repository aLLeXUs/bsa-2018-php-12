<?php

namespace App\Services;

use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;
use Illuminate\Support\Collection;

class DatabaseWalletService implements WalletServiceInterface
{
    public function create(CreateWalletRequest $request): Wallet
    {
        // TODO: Implement create() method.
    }

    public function findByUser(int $userId): ?Wallet
    {
        // TODO: Implement findByUser() method.
    }

    public function findCurrencies(int $walletId): Collection
    {
        // TODO: Implement findCurrencies() method.
    }
}