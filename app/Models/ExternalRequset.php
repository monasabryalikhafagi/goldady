<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalRequset extends Model
{
    use HasFactory;
    protected $table = 'external_request';
    public $timestamps = true;
    protected $fillable = ['status', 'user_id'];
}
