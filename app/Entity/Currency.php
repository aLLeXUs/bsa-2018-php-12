<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';
    public $timestamps = false;

    public function monies()
    {
        return $this->hasMany('App\Entity\Money');
    }
}
