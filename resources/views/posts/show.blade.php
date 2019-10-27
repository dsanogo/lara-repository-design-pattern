@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}Post</div>

                <div class="card-body">
                    
                    {{-- {!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!} --}}
                    
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title', 'disabled']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', "Content") !!}
                            {{-- {!! Form::textarea('content', {!!$post->content!!}, ['class' => 'form-control', 'placeholder' => 'Write something here...', 'disabled']) !!} --}}
                            <div>{!! $post->content !!}</div>
                        </div>
                    
                        <div class="form-group">
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info float-right">Edit</a>
                        </div>

                    {{-- {!! Form::close() !!} --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
