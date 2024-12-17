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
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected  $table = 'orders';

    /**
     * Get the order's billing address
     */
    public function billing_address(): BelongsTo
    {
        return $this -> belongsTo(Address::class , 'billing_address_id');
    }

    
    /**
     * Get the order's shipping address
     */
    public function shipping_address(): BelongsTo
    {
        return $this -> belongsTo(Address::class , 'shipping_address_id');
    }
    
    /**
     * Get the user that placed the order
     */

    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class , 'user_id');
    }

    
    /**
     * Get the products the order contains
     */

    public function products():belongsToMany
    {
        return $this -> belongsToMany(Product::class , 'pivot__products_in_orders','order_id','product_id');
    }
}
