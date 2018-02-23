@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input name="slug" type="text" class="form-control" id="slug">
                    </div>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection