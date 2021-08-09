<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packeges';
    protected $fillable = [
        'title',
        'description',
        'price',
        'durationDay',
        'durationNight',
        'discount',
        'finalPrice',
        'file_path',
        'reviewPoint',
        'totalReview',
        'created_at',
        'updated_at',
    ];
}
