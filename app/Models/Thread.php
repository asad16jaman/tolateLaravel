<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title','description','user_id','catagory_id','created_at','updated_at'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
    function comments(){
        return $this->hasMany(Comment::class);
    }
    
}
