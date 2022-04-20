<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['OfferTitle', 'CompanyName', 'Remote', 'OfferDescription','TimeWork','SalaryRange','Requirement','Image','WhoWeAre','County','City','Experience'];
}
