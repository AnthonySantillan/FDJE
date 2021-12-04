<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
//spati
use Spatie\Permission\Traits\HasRoles;

class Paper extends Model
{
    use HasFactory, HasRoles;
=======

class Paper extends Model
{
    use HasFactory;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    protected $fillable = [
        'dia',

        'ayunas',
        'nph_lantus',
        'rapida_ultra_rap',
<<<<<<< HEAD

        'media_manana',
        'rapida_ultra_rap_m',

        'almuerzo',
        'rapida_ultra_rap_a',

        'media_tarde',
        'rapida_ultra_rap_t',

        'merienda',
        'rapida_ultra_rap_md',

=======
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
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
        'nph_lantus_md',

        'dormir',
        'madrugada',
<<<<<<< HEAD
        'correcion_total',


    ];
    function users()
    {
        return $this->hasMany(User::class);
    }
=======


    ];
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
}
