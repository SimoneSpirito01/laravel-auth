@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="post mt-5">
                <h3 class="text-uppercase">{{$post->title}}</h3>
                <p class="my-4">{{$post->content}}</p>
                <span class="text-primary">{{($post->published == 0) ? 'Not published' : 'Published'}}</span>
            </div>
            <div class="buttons mt-4">
                <button type="button" class="btn btn-danger"><a class="text-white" href="{{route('posts.index')}}">Back to the list</a></button>
            </div>
        </div>
    </div>
</div>
    
@endsection