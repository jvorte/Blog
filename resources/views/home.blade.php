@extends('layouts.layout')

@section('content')


<div class="container pt-5 mt-sm-0">

    <div class="row">

      <div class="col">
        <h1 class="logo display-1 fw-bolder d-flex flex-wrap justify-content-md-center">Friendship</h1>
        <h6 class="s_logo display-5 d-flex flex-wrap justify-content-md-center">Blog to connect the people</h6>
      </div>
      <div class="col d-flex flex-wrap justify-content-md-center">
        <img class="img"  src="images/photo.jpg" alt="" title="">      
      </div>

    </div>
    <div class="row">
    <div class="col mt-5 mt-sm-0 ">
      <h1>The Last Posts</h1>        
    </div>
    </div>

<div class="row">
    <div class="col mt-5 mt-sm-0 ">
        
          
{{-- ----------------card--------------------------- --}}
      @foreach ($posts as $post)

       @include('includes.post')

      @endforeach

      </div>
   </div>
</div>
{{-- ----------------card--------------------------- --}}
@endsection
