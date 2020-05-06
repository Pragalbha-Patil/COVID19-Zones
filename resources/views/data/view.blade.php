@extends('layouts.app')
@section('content')
    <div class="container w-95">
        <div class="m-2">
            <a href="{{route('get-database')}}" class="btn btn-secondary">Get Database Copy</a>

{{--            <script>--}}
{{--                $.ajax({url: "/view-data", success: function(result){--}}
{{--                    console.log(result);--}}
{{--                }});--}}
{{--            </script>--}}

        </div>
        <table class="table table-light">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">District</th>
                <th scope="col">Zone</th>
                <th scope="col">State</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                    <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->district}}</td>
                    <td class="zone">{{$data->zone}}</td>
                    <td>{{$data->state}}</td>
                        <td>
                            <a href="/modify-data/{{$data->id}}" class="btn btn-warning">
                                Modify
                            </a>
                        </td>
                        <td>
                            <a href="/delete-data/{{$data->id}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure to delete this data?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
