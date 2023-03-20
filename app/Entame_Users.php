<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entame_Users extends Model
{
    protected $fillable = ['id', 'device_name', 'device_pattern', 'device_os','borrower','when_rented','created_at','updated_at']; 
}
