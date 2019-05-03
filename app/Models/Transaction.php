<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Transaction extends Model
{
    use HasRoles;

    protected $guard_name = 'web';

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
