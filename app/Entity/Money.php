<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Money extends Model
{
    use SoftDeletes;

    protected $table = 'money';
    public $timestamps = false;

    public function currency()
    {
        return $this->hasOne('App\Entity\Currency');
    }

    public function wallet()
    {
        return $this->belongsTo('App\Entity\Wallet');
    }
}
