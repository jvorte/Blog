@extends('layouts.layout')


@section('content')

<div class="container mt-5">
        <h1>The Post</h1>

     
              
                <div class="card text-center">
                    <div class="card-header">
                      <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                          <a class="nav-link " href="{{route('edit_post',$post)}}">Edit</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{route('delete_post',$post)}}">Delete</a>
                        </li>
                        {{-- <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li> --}}
                      </ul>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">{{$post->title}}</h3>
                      <h5 class="card-title">{{$post->user}}</h5>
                      <p class="card-text">{{$post->post}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                      </div>
                  </div>


            

    </div>

@endsection