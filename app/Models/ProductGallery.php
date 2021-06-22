<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['images', 'products_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
