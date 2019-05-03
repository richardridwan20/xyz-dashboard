<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $connection = 'mysql.log';
    protected $table = 'error_logs';
}
