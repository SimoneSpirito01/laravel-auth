@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="post mt-5">
                <h3 class="text-uppercase">{{$post->title}}</h3>
                <p class="my-4">{{$post->content}}</p>
                <span class="badge {{($post->published) ? 'badge-success' : 'badge-secondary'}}">{{($post->published) ? 'Published' : 'Not published'}}</span>
            </div>
            <div class="buttons mt-4">
                <button type="button" class="btn btn-warning mr-2"><a class="text-white" href="{{route('posts.edit', $post->slug)}}">Edit</a></button>
                <form class="d-inline-block" action="{{route('posts.destroy', $post->slug)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-primary ml-1"><a class="text-white" href="{{route('posts.index')}}">Back to the list</a></button>
            </div>
        </div>
    </div>
</div>
    
@endsection