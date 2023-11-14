<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class landfill extends Model
{
    protected $fillable = [
        'id',
        'tanggal',
        'janitor_id',
        'vehicle_id',
        'location_id',
    ];

    use HasFactory;

    public function janitor(): BelongsTo
    {
        return $this->belongsTo(Janitor::class);
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
