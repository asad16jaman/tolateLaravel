<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $guarded = [];


    function user(){
        return $this->belongsTo(User::class);
    }

    function gallery(){
        return $this->hasMany(HouseGallery::class);
    }



}
