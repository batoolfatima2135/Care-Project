<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'name', 'email', 'city','country','address','phone','qualification','about','image'
    ];
}
