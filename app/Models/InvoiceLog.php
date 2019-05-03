<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Partner;

class InvoiceLog extends Model
{
    protected $guard_name = 'web';
    protected $connection = 'mysql.log';
    protected $table = 'invoice_logs';
    use HasRoles;

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }
}
