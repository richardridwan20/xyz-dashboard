<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Agent extends Model
{
    use Notifiable, HasRoles;

    protected $guard_name = 'web';
    protected $guarded = [];
    protected $connection = 'mysql';
}
