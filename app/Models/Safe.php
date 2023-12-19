<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Safe extends Model 
{

    protected $table = 'safe';
    public $timestamps = true;
    protected $fillable = ['user_id', 'type'];

}