<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Auth;
class CommentsController extends Controller
{
    public function new_comment(Post $post, Request $request){
        if ($request->method() == 'POST') {
            $comment = new Comment();
            $comment->comment = $request->get('comment');
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $post->id;
            if ($comment->save()){
                echo "Το σχόλιο καταχωρήθηκε επιτυχώς.";
                return redirect()->route("post", $post);
            };

        };
        return view('newcomment', ['post' => $post]);
    }

    
}