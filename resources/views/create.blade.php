@extends('app')

@section('content')

    <h1>Create new cafe</h1>

    <form action="/public/adm/create/store" method="post">
        <div class="form-group">
            <label for="name">Name cafe</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            <small class="form-text text-muted">Write the name</small>
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" rows="3" name="desc"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" class="form-control" name="img" placeholder="Enter URL">
            <small class="form-text text-muted">Paste URL image</small>
        </div>
        <div class="form-group">
            <label for="cat">Cat cord.</label>
            <input type="text" class="form-control" name="cat" placeholder="Enter CAT">
            <small class="form-text text-muted">Write CAT</small>
        </div>
        <div class="form-group">
            <label for="long">Long cord.</label>
            <input type="text" class="form-control" name="long" placeholder="Enter LONG">
            <small class="form-text text-muted">Write LONG</small>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-default" href="/public/adm">Back to list</a>
    </form>

@endsection