<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'Plant','Farmers','Superficie','Pays','Région','Date Semis','Date Recolte','Prise Contact','Localisation',
           
    ];
}
