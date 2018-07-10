<?php

namespace App\Services;

use App\Entity\Currency;
use App\Entity\Money;
use App\Entity\Wallet;
use App\Entity\User;
use App\Requests\CreateWalletRequest;
use Illuminate\Support\Collection;

class DatabaseWalletService implements WalletServiceInterface
{
    public function create(CreateWalletRequest $request): Wallet
    {
        $user = User::find($request->getUserId());
        if (empty($user->wallet)) {
            $wallet =  new Wallet();
            $wallet->user_id = $request->getUserId();
            $wallet->save();
            return $wallet;
        } else {
            throw new \LogicException('User already have wallet.');
        }
    }

    public function findByUser(int $userId): ?Wallet
    {
        $user = User::find($userId);
        if ($user) {
            return $user->wallet;
        } else {
            return null;
        }
    }

    public function findCurrencies(int $walletId): Collection
    {
        $currencies = Currency::join('money', 'currency.id', '=', 'money.currency_id')
            ->select('currency.*')
            ->get();
        return $currencies;
    }
}