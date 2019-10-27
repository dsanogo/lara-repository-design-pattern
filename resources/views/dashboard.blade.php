@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3 class="text-center">Your Posts</h3>
                    
                    @if ($posts->count() < 1)
                        <div class="text-center">
                            <h5>You do not have any post</h5>
                            <a href="{{route('posts.create')}}" class="btn btn-primary">New Post</a>
                        </div>
                    @else
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            
                        </thead>
                        <tbody class="text-center">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="text-left">{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-light">Show</a>
                                    </td>
                                    <td>
                                        
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST']) !!}
                                            
                                            {!! Form::hidden('_method', "DELETE") !!}

                                            <div class="form-group">
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
