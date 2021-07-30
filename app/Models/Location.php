<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'location'
    ];
    protected $casts = [
       
        'location' => 'array',
       
        ];

     public function resortloc(){
         return $this->belongsTo(Resort::class);
     }   

     public function user(){
         return $this->belongsTo(User::class);
     }
}
