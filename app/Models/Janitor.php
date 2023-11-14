<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Janitor extends Model
{
    protected $fillable = [
        'id',
        'nama_petugas',
        'tanggal_lahir',
        'lokasi',
    ];
    use HasFactory;

    public function landfill(): HasOne
    {
        return $this->hasOne(Landfill::class);
    }
}
