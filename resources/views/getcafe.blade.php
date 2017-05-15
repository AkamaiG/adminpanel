@extends ('app')

@section('content')
<center><h1>Cafe list</h1></center>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Desc</th>
        <th>Image</th>
        <th>Cat</th>
        <th>Long</th>
        <th>Display</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($cafelist as $cafel)
    <tr>
        <td>{{ $cafel->name }}</td>
        <td>{{ $cafel->desc }}</td>
        <td>{{ $cafel->img }}</td>
        <td>{{ $cafel->cat }}</td>
        <td>{{ $cafel->long }}</td>
        <td>
            <div class="btn-group">
                <a href="/public/adm/delete/{{ $cafel->id }}" class="btn btn-danger">Delete cafe</a>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Update cafe</a></li>
                </ul>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

    <a class="btn btn-primary" href="/public/adm/create">Add new cafe</a>
@endsection

