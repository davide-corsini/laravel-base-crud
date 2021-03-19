<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name','regista','original_language','cost','trama','genere','Data_uscita','poster'
    ];
}
