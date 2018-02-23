@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                        <a href="/pages/add" class="list-group-item list-group-item-action active">
                            Новая страница
                        </a>
                </div>
                <div class="list-group">
                    @foreach($pages as $page)
                        <a href="/{{ $page->slug }}" class="list-group-item list-group-item-action">
                            {{ $page->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection