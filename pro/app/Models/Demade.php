<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demade extends Model
{
    use HasFactory;
    protected $fillable = ['Age', 'Job', 'Skills', 'Country','City','Biographie','user_id'];

}