<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected  $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];

    public function orders():HasMany
    {
        return $this -> hasMany(Order::class , 'user_id');
    }

    public function addresses():HasMany
    {
        return $this -> hasMany(  Address::class , 'user_id');
    }
}

