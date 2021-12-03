<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $fillable = [
        'dia',

        'ayunas',
        'nph_lantus',
        'rapida_ultra_rap',
        'correcion',

        'media_mañana',
        'rapida_ultra_rap_m',
        'correcion_m',

        'almuerzo',
        'rapida_ultra_rap_a',
        'correcion_a',

        'media_tarde',
        'rapida_ultra_rap_t',
        'correcion_t',

        'merienda',
        'rapida_ultra_rap_md',
        'correcion_md',
        'nph_lantus_md',

        'dormir',
        'madrugada',


    ];
}
