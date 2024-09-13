<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
    ];

    public function products()
    {
        return $this->hasMany(Product::class );
    }

    public function scopeFilter(Builder $builder , array $filters)
    {
       if ($filters['search'] ?? false){

           $builder->where('title','like','%'.$filters['search'].'%');
       }

    }
}
