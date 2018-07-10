<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    public function wallet()
    {
        return $this->hasOne('App\Entity\Wallet');
    }
}
