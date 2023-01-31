<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'brand_id',
        'viscosity_id',
        'category_id',
        'volume_id',
        'type_id',
        'price',
        'model',
        'base',
        'slug'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }


    public function viscosity()
    {
        return $this->belongsTo(Viscosity::class, 'viscosity_id', 'id');
    }



    public function volume()
    {
        return $this->belongsTo(Volume::class, 'volume_id', 'id');
    }


    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
