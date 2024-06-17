<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ref',
        'picture',
        'price',
        'quantity',
        'category_id',
        'sub_category_id',
        'brand_id',
        'primary_desc',
        'full_desc',
        'discount',
        'satrtOn',
        'endOn',
        'accepted',
        'store_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsto(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsto(Brand::class);
    }

    public function docs()
    {
        return $this->hasMany(Document::class);
    }

    public function pictures()
    {
        return $this->hasMany(Photo::class);
    }

    public function store()
    {
        return $this->belongsto(Store::class);
    }
}
