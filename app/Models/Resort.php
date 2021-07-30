<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Adapter\Local;

class Resort extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contact',
        'price',
        'description',
        'display'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function resortImage(){
    //     return $this->hasMany(ResortImage::class);
    // }

    // public function location(){
    //     return $this->hasMany(Location::class);
    // }
    

 
}
