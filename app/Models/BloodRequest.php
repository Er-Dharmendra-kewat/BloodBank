<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    protected $table  = 'blood_requests';

    protected $fillable = ['Requested_by','Recipient_name','Date_request','blood_type','Num_of_bags','amount','purpose','remarks','action'];
}
