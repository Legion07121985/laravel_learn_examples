@section('content')
    <center><h1>Data change</h1></center>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $obj)
            <tr>
                <th scope="row">{{ $obj->id }}</th>
                <td>{{ $obj->name }}</td>
                <td>{!! $obj->description !!}</td>
                <td><a href="{{$_ENV['APP_URL']}}/tabwc/{{ $obj->id }}/edit">Edit</a></td>
                <td><a href="{{$_ENV['APP_URL']}}/tabwc/{{ $obj->id }}">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection