<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'bibiography','email','name','age','hold-agrix','phone','whatsApp','sex','source','created_at','updated_at',
           
    ];
}
