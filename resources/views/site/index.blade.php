@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($posts as $post)
                    <h2>{{ $post->title }}</h2>
                @endforeach
            </div>
        </div>
    </div>
@endsection