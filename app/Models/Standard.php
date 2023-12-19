<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model 
{

    protected $table = 'standards';
    public $timestamps = true;
    protected $fillable = ['name'];

}