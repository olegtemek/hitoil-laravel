<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petrol extends Model
{
    use HasFactory;
    protected $fillable = ['factory_id', 'title', 'price', 'volume', 'base_id', 'image'];

    public function parent()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }
}
