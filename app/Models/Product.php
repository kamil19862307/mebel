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
        'category_id',
        'description',
        'image',
        'size',
        'color_id',
        'material',
        'weight',
    ];


    public function color()
    {
        return $this->belongsTo(Color::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
