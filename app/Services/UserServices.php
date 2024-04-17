<?php

namespace App\Services;

use App\Models\User;

class UserServices
{

    public function list(): array
    {
        return User::all()->toArray();
    }

    public function store(array $data): User
    {
        return User::create($data);
    }

}
