<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'resort_id',
        'location'
    ];
    protected $casts = [
       
        'location' => 'array',
       
        ];

 


}
