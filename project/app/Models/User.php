<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name','email', 'password'];
    // public function request(){
    //     return $this->hasMany('App\Models\User');
    // }
    // public function offer(){
    //     return $this->hasMany('App\Models\User');
    // }
}
