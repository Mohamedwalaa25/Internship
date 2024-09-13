<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'image',
        'details',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function scopeFilter(Builder $builder , array $filters)
    {
        if ($filters['search'] ?? false){

            $builder->where('name','like','%'.$filters['search'].'%')
         ->orWhere('brand','like','%'.$filters['search'].'%')
         ->orWhere('details','like','%'.$filters['search'].'%')
         ->orWhere('price','like','%'.$filters['search'].'%');

        }

    }
}
