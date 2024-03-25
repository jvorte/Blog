<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function second(){
     return view('posts',['posts' =>['today' , 'jim','oscaR']]);
    }

    public function front(){
        return view('home',['posts' =>['today' ,'oscaR']]);
       }


       public function form(Request $request){
       if ($request->method() == 'POST') {
        echo $request->get('user');
       };
        return view('input_form');
       }

    public function search(Request $request){
     $q = $request->get('q','no results');
        return view('search',['q'=> $q]);
       }


}
