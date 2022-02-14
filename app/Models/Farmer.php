<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $fillable = [
         'bibiography','email','name','age','hold-agrix','phone','whatsApp','sex','source',
           
    ];
}
