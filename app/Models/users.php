<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class users extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $guarded = ['id'];
}
