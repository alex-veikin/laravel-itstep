@extends('layouts.site')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if( session()->has('status') )
                    <div class="alert alert-info" role="alert">{{ session('status') }}</div>
                @endif

                <div class="list-group">
                    {!! link_to_route('allPosts', 'Назад', [], ['class'=>'list-group-item list-group-item-action active']) !!}
                </div>

                {!! Form::open(['route'=>['deletePost', $id], 'method'=>'post']) !!}
                <div class="form-group">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                </div>
                {!! Form::submit('Удалить', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection