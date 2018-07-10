<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;

    protected $table = 'wallet';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Entity\User');
    }

    public function monies()
    {
        return $this->hasMany('App\Entity\Money');
    }
}
