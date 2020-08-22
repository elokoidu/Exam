<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nimi',
        'hind',
        'tootekood',
        'tootefoto',
        'naitajad',
        'tootja',
        'kategooria'
    ];

}
