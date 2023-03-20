<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entame_Users extends Model
{
    protected $fillable = ['name', 'email', 'address', 'tel']; 
}
