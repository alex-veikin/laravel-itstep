@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>{!! $post->content !!}</p>
                <div class="list-group">
                    {!! link_to_route('allPosts', 'Назад', [], ['class'=>'list-group-item list-group-item-action active']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection