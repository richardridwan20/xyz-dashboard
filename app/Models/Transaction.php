<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Transaction extends Model
{
    use HasRoles;

    protected $guard_name = 'web';
    protected $guarded = [];

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function plan()
    {
        return $this->belongsTo(ProductPlan::class, 'plan_id');
    }
}
