<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CommentController extends Controller
{
    //

    function index(int $id){
        $thread = Thread::with(['comments'=>function($qry){
            $qry->with(['user'=>function($query){
                $query->select('id','email');
            },
            'likes'=>function($likeQry){
                $likeQry->select('comment_id')->count();
            }
            ])->latest();
        }])->find($id);

    //    return response()->json($thread);

        return view('front.comment.index',['thread'=>$thread]);

    }

    function store(Request $request,int $id){

        $data = Comment::create([
            'content' => $request->input('discription'),
            'user_id' => $request->user()->id,
            'thread_id' => $id
        ]);

        return response()->json(
            [
                'success' => true,
                'data' => $data
            ]
        );
    }

    function update(Request $request,int $id){
        $data = Comment::findOrFail($id);
        $data->content = $request->input('content');
        $data->save();
        return response()->json([
            'success'=>true,
            'messages' => 'successfully deleted'
        ]);

    }



    function delete(int $id){
        //policy have to write
        
        $ob = Comment::findOrFail($id);
        $ob->delete();

        return response()->json([
            'success' => true,
            'messages' => 'successfully deleted'
        ]);

    }


}
