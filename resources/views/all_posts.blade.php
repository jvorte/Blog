@extends('layouts.layout')

@section('content')

<div class="container mt-5">

    @if (Auth::check())
    <div class="row">
        <h1>All Posts</h1>
        <a href="{{ route('input_form') }}">New Post</a>
    </div>
    @endif

    @foreach ($posts as $post)

    @include('includes.post')

    @endforeach
</div>
@endsection