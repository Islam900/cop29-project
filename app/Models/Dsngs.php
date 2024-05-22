<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dsngs extends Model
{
    use HasFactory;
    protected $table = 'dsngs';
    protected $fillable = [
        'user_id',
        'period',
        'start_date',
        'end_date',
        'vehicle_mounted',
        'vehicle_make',
        'vehicle_model',
        'vehicle_registration_number',
        'studio_name',
        'studio_city',
        'satellite_network',
        'satellite_orbital_position',
        'coder_equipment_manufacturer',
        'coder_equipment_model',
        'antenna_manufacturer',
        'antenna_model',
        'antenna_gain',
        'antenna_freq_range_start',
        'antenna_freq_range_end',
        'coder_freq_min',
        'coder_freq_max',
        'customs_clearance',
        'comments',
        'read_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
