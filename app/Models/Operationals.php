<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operationals extends Model
{
    use HasFactory;

    protected $table = 'operationals';
    protected $fillable = [
        'user_id',
        'service_type',
        'period',
        'start_date',
        'end_date',
        'in_out_use',
        'manufacturer',
        'hand_model',
        'hand_units',
        'belt_pack_model',
        'belt_pack_units',
        'power_output',
        'antenna_height',
        'antenna_gain',
        'frequency_range_start',
        'frequency_range_end',
        'tuning_step',
        'bandwidth',
        'customs_clearance',
        'comments',
        'read_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
