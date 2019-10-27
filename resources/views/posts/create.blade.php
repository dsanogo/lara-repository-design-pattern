@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                    
                    
                    {!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
                    
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                            
                        </div>
                       

                        <div class="form-group">
                            {!! Form::label('content', "Content") !!}
                            {!! Form::textarea('content', '', ['id' => 'post-content', 'class' => 'form-control', 'placeholder' => 'Write something here...']) !!}
                        </div>
                    
                        <div class="form-group">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary float-right']) !!}
                        </div>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
