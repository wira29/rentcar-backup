<?php

namespace App\Models;

use App\Models\Charge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'rentals';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'name', 'province_id', 'regency_id', 'district_id', 'village_id', 'address', 'policies', 'photo'
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function conditions() : HasMany
    {
        return $this->hasMany(Condition::class);
    }

    public function charges() :HasMany
    {
        return $this->hasMany(Charge::class);
    }
}
