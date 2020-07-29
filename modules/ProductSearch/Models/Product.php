<?php

namespace Modules\ProductSearch\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['api_id', 'image_url', 'product_name', 'categories'];
}
