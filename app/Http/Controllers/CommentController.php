<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    function index(int $id){
        $thread = Thread::find($id);

        return view('front.comment.index');

    }


}
