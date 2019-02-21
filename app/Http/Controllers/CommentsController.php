<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
class CommentsController extends Controller
{
    public function addComment(Request $request)
    {

    	$comment = $request->input('comment');
        $prod_id = (int)$request->input('prod_id');
        $user_id = auth()->user()->id;
        $email = $request->input('email');
      

                $objComment = new Comment();
        $objComment = $objComment->create([
            'prod_id' => $prod_id,
            'user_id'    => $user_id,
            'email'    => $email,
            'comment'    => $comment
            
        ]);
        return response()->json($objComment);


        if($objComment) {
            return back();
        }
        return back();
    }
    public function showcomment(){
      $comment=DB::table(DB::raw('user,comments'))->select(DB::raw('user.email,comments.comment,comments.created_at'))->where('user.id','=','comments.user_id')->get();
       
    }
}
