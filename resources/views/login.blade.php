@extends('app')

@section('content')

    <h1>Login</h1>

    <form action="/public/adm/create/store" method="post">
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
            <small class="form-text text-muted">Write username</small>
        </div>
        <div class="form-group">
            <label for="desc">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
            <small class="form-text text-muted">Write password</small>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection