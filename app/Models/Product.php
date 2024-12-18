<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected  $table = 'products';

    /**
     * Get the orders the product is included
     */
    public function orders():BelongsToMany
    {
        return $this -> belongsToMany(Product::class , 'pivot__products_in_orders','product_id','order_id');
    }
    
}
