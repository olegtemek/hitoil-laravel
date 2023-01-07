<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petrol extends Model
{
    use HasFactory;
    protected $fillable = ['factory_id', 'title', 'price', 'volume', 'passport'];

    public function factory()
    {
        return $this->hasOne(Factory::class, 'id', 'factory_id');
    }
}
