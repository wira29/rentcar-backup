<?php

namespace App\Models;

use App\Models\User;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'car_id', 'driver_id', 'users', 'start_date', 'end_date', 'status'];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users');
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
