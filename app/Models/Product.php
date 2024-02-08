<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'category_id', 'description'];

    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    protected function image(): Attribute{
        return Attribute::make(
            get: fn ($value) => $value ? $value : '/images/no-image.jpg'
        );
    }

    protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes) => Str::words($attributes['description'], 5, '...')
        );
    }

}