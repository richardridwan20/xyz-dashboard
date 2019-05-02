<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function partner()
    {
        return $this->belongsto('App\Partner');
    }

    public function customer()
    {
        return $this->belongsto('App\Customer');
    }

    public function product()
    {
        return $this->belongsto('App\Product');
    }
}
