@extends('templates.main')

@section('content')
    <h1>Create Category</h1>

    {!! Form::open(['route' => 'categories.store']) !!}

    {!! Form::close() !!}
@endsection
