<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
    use HasFactory;
    protected $fillable =[
        'DestinationID',
        'Name',
        'Description',
        'Location',
        'OpeningHours',
        'AdmissionFee',
        'ImageURL'
    ];
}
