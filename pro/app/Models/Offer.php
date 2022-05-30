<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['OfferTitle', 'CompanyName', 'Remote', 'OfferDescription','TimeWork','SalaryRange','Requirement','Image','WhoWeAre','County','City','Experience'];

    // function BelongsTo User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

