@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Messages</h1>
    @foreach ($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">From: {{ $message->fromUser->nome }}</h5>
                <p class="card-text">{{ $message->message }}</p>
                <a href="{{ route('messages.show', $message->id) }}" class="btn btn-primary">View Message</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
