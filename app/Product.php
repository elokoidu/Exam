<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
