@extends('templates.main')

@section('content')
    <h1>Contact Us</h1>

    @include('messages.errors')

    <form action="{{ route('contacts.send') }}" method="post">
        @csrf

        <div class="mt-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mt-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mt-3">
            <label>Message:</label>
            <textarea name="message" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Send</button>
    </form>

@endsection
