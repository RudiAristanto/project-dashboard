<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = [
        'id',
        'nama_lokasi',
        'jumlah',
    ];

    use HasFactory;

    public function landfills(): HasMany
    {
        return $this->hasMany(Landfill::class);
    }
}
