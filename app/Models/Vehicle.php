<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    protected $fillable = [
        'id',
        'jenis_kendaraan',
        'nopol',
        'surat',
    ];
    use HasFactory;

    public function landfill(): HasOne
    {
        return $this->hasOne(Landfill::class);
    }
}
