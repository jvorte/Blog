@extends('layouts.layout')

@section('content')

<div class="container mt-5">
    <div class="row">
   
            <h1>The Last Posts</h1> 
       
     <a href="{{ route('input_form') }}">New Post</a>
      
    </div>


        @foreach ($posts as $post)

            @include('includes.post')

        @endforeach
</div>
@endsection
