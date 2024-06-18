@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Message</h1>
    <p><strong>From:</strong> {{ $message->fromUser->nome }}</p>
    <p>{{ $message->message }}</p>
    <a href="{{ route('messages.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
