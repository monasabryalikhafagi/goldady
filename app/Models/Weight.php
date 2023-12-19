<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model 
{

    protected $table = 'weights';
    public $timestamps = true;
    protected $fillable = ['name'];

}