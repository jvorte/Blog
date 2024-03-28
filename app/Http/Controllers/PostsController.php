<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostsController extends Controller
{
    
// -----------home page posts-----------------------------------------
    public function index(){
        $posts = POST::all(); 
        return view('all_posts', ['posts' => $posts]);
    } 

    // --------end---home page posts---------------------------------

    public function front(){
        $posts = POST::all(); 
        return view('home', ['posts' => $posts]);
       }
// ------------end--posts------------------------------------------


// ------------------new posts--------------------------------------
       public function form(Request $request){
       if ($request->method() == 'POST') {
        $post = new POST();
        $post->id = $request->get('id');+
        $post->user_id = Auth::user()->id;
        $post->user = $request->get('user');
        $post->email = $request->get('email');
        $post->title = $request->get('title');
        $post->post = $request->get('post');
                if ($post->save()) {
                return redirect('/posts');
                } else {
                    echo "not ok";
                }; 
       };
        return view('input_form');
       }

// -------------end-----new posts---------------------------------
// -------------edit---------------------------------
public function edit_post(Post $post, Request $request){
    if (Auth::user()->id != $post->user_id) return redirect('posts');   
    if ($request->method() == 'POST') {
        $post->title = $request->get('title');
        $post->post = $request->get('post');
        if ($post->save()){
            echo "Η ανάρτηση καταχωρήθηκε επιτυχώς.";
            return redirect('posts');
        };

    };
    return view('edit_post', ['post' => $post]);
}
   
// ------------end--edit------------------------------------------


// ------------------post--------------------------------------
public function post(Post $post){

    return view('view_post', ['post' => $post]);
}

// -------------end---post---------------------------------
// ------------------post--------------------------------------
public function posts(Post $post){

    return view('view_post', ['posts' => $post]);
}

// -------------end---post---------------------------------


// ------------------search--------------------------------------
    public function search(Request $request){
     $q = $request->get('q','no results');
     if (!$request->filled('q')){
        $q = 'no results';
     }
      else{
        // $posts = Post::where('title','like','%'.$q.'%')->get(); only in title
        $posts = Post::where('title','like','%'.$q.'%')->orwhere('post','like','%'.$q.'%')->get();
     }
        return view('posts',['posts'=> $posts]);
       }

// ----------------end--search------------------------------------


// ------------------edit--------------------------------------
public function delete_post(Post $post){
    if (Auth::user()->id != $post->user_id) return redirect('posts');
       
     $post->delete();
    return redirect('posts');
}

// -------------end---esit---------------------------------

}



