<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = ['imie', 'data', 'godzina', 'ilosc'];

}
