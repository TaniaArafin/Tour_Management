<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'userName',
        'userEmail',
        'userContact',
        'userID',
        'tourID',
        'tourName',
        'tourDuration',
        'travelDate',
        'transportation',
        'food',
        'hotel',
        'price',
    ];
}
