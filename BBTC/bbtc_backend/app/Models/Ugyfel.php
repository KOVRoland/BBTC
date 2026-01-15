<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ugyfel extends Model
{
    protected $table = 'ugyfel';
    protected $primaryKey = 'azon';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = [
        'nev',
        'szulev',
        'irszam',
        'orsz'
    ];

    public function befizetesek()
    {
        return $this->hasMany(Befiz::class, 'ugyfel_azon', 'azon');
    }
}
