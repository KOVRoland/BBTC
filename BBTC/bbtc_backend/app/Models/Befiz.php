<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Befiz extends Model
{
    protected $table = 'befiz';

    protected $fillable = [
        'ugyfel_azon',
        'datum',
        'osszeg'
    ];

    public function ugyfel()
    {
        return $this->belongsTo(Ugyfel::class, 'ugyfel_azon', 'azon');
    }
}
