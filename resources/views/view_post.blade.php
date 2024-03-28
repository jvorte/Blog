@extends('layouts.layout')


@section('content')

<div class="container mt-5">
        <h1>The Post</h1>

    <!-- ---------------------card post---------------------------------------------------------- --> 
              
                <div class="card text-center">
                    <div class="card-header">
                      <ul class="nav nav-pills card-header-pills">
                        @if(Auth::check() && Auth::user()->id == $post->user_id)
                        <li class="nav-item">
                          <a class="nav-link " href="{{route('edit_post',$post)}}">Edit</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{route('delete_post',$post)}}">Delete</a>
                        </li>
                        @endif
                        @if(Auth::check() && Auth::user()->id != $post->user_id)
                         <li class="nav-item">
                          <a class="nav-link"  href="{{route('newcomment',$post)}}">Reply</a>
                        </li> 
                        @endif
                      </ul>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">{{$post->title}}</h3>
                    
                      <p class="card-text">{{$post->post}}</p>

                    </div>
                    <div class="card-footer text-muted">
                    Writed from : {{$post -> user}} at {{$post -> created_at}}
                      </div>
                  </div>
<!-- ------------------------end card post------------------------------------------------------- -->

    </div>

@endsection