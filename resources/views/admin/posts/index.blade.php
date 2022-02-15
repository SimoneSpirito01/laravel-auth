@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista dei post</div>
                <div class="card-body">
                    <div class="posts">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Published</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{($post->published == 0) ? 'No' : 'Yes'}}</td>
                                    <td><button type="button" class="btn btn-info"><a class="text-white" href="{{route('posts.show', $post->slug)}}">View</a></button></td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection