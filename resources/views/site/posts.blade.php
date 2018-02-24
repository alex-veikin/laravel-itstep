@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                    {!! link_to_route('addPost', 'Новая статья', [], ['class'=>'list-group-item list-group-item-action active']) !!}
                </div>
                <div class="list-group">
                    @foreach($posts as $post)
                        <a href="/posts/{{ $post->slug }}" class="list-group-item list-group-item-action">
                            {{ $post->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection