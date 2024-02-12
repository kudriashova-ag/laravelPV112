@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Latest</h2>
        <div class="row">
            @foreach ($latestProducts as $item)
                <div class="col-md-3">
                    @include('catalog._product')
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('title', 'Home Page')
