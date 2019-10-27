@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}Post</div>

                <div class="card-body">
                    
                    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'POST']) !!}
                    
                    {!! Form::hidden('_method', "PUT") !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', "Content") !!}
                            {!! Form::textarea('content', $post->content, ['id' => 'post-content','class' => 'form-control', 'placeholder' => 'Write something here...']) !!}
                        </div>
                    
                        <div class="form-group">
                            {!! Form::submit("Update", ['class' => 'btn btn-primary float-right']) !!}
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-dark">Cancel</a>
                        </div>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
