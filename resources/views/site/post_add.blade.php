@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                    {!! link_to_route('allPosts', 'Назад', [], ['class'=>'list-group-item list-group-item-action active']) !!}
                </div>

                {!! Form::open(['route'=>'savePost', 'method'=>'post']) !!}
                {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', old('slug'), ['class'=>'form-control', 'id'=>'slug']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Название') !!}
                    {!! Form::text('title', old('title'), ['class'=>'form-control', 'id'=>'title']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ckeditor', 'Контент') !!}
                    {!! Form::textarea('content', old('content'), ['class'=>'form-control', 'id'=>'ckeditor']) !!}
                </div>
                <div class="form-group">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                </div>
                {!! Form::submit('Добавить', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection