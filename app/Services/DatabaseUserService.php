<?php

namespace App\Services;

use App\Entity\User;
use App\Requests\SaveUserRequest;
use Illuminate\Support\Collection;

class DatabaseUserService implements UserServiceInterface
{
    public function save(SaveUserRequest $request): User
    {
        if ($request->getId()) {
            $user = User::find($request->getId());
        } else {
            $user = new User();
        }
        $user->id = $request->getId();
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();
        return $user;
    }

    public function delete(int $id): void
    {
        User::find($id)->delete();
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function findAll(): Collection
    {
        return User::all();
    }
}