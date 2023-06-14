<?php

namespace App\Models;

use App\Models\Rent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory;

    protected $fillable = ['rent_id', 'charge_type', 'total', 'description'];

    public function rent():BelongsTo
    {
        return $this->belongsTo(Rent::class, 'rent_id');
    }

}
