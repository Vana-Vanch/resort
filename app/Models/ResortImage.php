<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResortImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'path'
    ];
  

    // public function resort(){
    //     return $this->belongsTo(Resort::class);
    // }

    // public function userResort(){
    //     return $this->belongsTo(User::class);
    // }

}
