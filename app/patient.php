<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'name', 'email', 'city','country','address','phone'
    ];
}
