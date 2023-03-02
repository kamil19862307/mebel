<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
        'price',
        'color_id',
        'brand_id',
        'category_id',
        'size',
        'material',
        'weight',
        'description',
        'image',
    ];


    public function color()
    {
        return $this->belongsTo(Color::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
