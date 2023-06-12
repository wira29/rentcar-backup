<?php

namespace App\Models;

use App\Models\Rent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['rental_id', 'name', 'address', 'driver_licence'];

    public function drivers(): HasMany
    {
        return $this->hasMany(Rent::class);
    }
}
