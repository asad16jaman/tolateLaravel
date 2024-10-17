<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HandleLikeController extends Controller
{
    //

    function store(Request $request,int $id){
        $ob = CommentLike::where('user_id',Auth()->user()->id)->where('comment_id',$id)->first();
        if(!$ob){
            $like= CommentLike::create([
                'user_id' => Auth()->user()->id,
                'comment_id' => $id
            ]);
        }else{
            $ob->delete();
            return response()->json([
                'success' => false
            ]);
        }
        

        return response()->json([
            'success' => true
        ]);

    }




}
