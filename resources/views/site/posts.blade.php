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
                        <div class="list-group-item">
                            {!! link_to_route('showPost', $post->title, [$post->slug], ['class'=>'']) !!}
                            <span class="pull-right">
                                {!! link_to_route('editPost', 'Редактировать', [$post->id], ['class'=>'badge badge-success']) !!}
                                {!! link_to_route('deletePost', 'Удалить', [$post->id], ['class'=>'badge badge-danger']) !!}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection