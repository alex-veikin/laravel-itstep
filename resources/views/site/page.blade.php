@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{--<h1>{{ $page->title }}</h1>--}}
                <p>{!! $page->content !!}</p>
            </div>
        </div>
    </div>
@endsection