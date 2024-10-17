<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
            'content' ,
            'user_id',
            'thread_id'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

   function likes(){
    return $this->hasMany(CommentLike::class);
   }




}
