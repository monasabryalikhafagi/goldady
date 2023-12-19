<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model 
{

    protected $table = 'gold';
    public $timestamps = true;
    protected $fillable = ['price', 'name','standard_id', 'weight_id', 'safe_id'];

}