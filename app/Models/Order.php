<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected  $table = 'orders';

    public function billing_address(): BelongsTo
    {
        return $this -> belongsTo(Address::class , 'billing_address_id');
    }

    public function shipping_address(): BelongsTo
    {
        return $this -> belongsTo(Address::class , 'shipping_address_id');
    }

    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class , 'user_id');
    }

    public function products():belongsToMany
    {
        return $this -> belongsToMany(Product::class , 'pivot__products_in_orders','order_id','product_id');
    }
}
