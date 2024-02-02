@extends('templates.main')

@section('content')

    <h1>{{ $title }}</h1>
    {!! $subtitle !!}

    @forelse ($users as $user)
        {{ $loop->iteration }} {{ $user }} <br>
    @empty
        <p>No users</p>
    @endforelse

@endsection


@section('title', 'Home Page')

