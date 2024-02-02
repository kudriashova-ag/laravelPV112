@extends('templates.main')

@section('content')
    <h1>Categories</h1>

    <a href="{{route('categories.create')}}" class="btn btn-primary my-3">Add new category</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection