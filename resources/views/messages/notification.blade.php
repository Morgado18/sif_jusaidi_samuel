@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notificações</h1>
    @foreach($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">{{ $message->content }}</p>
                <p class="card-text"><small class="text-muted">De: {{ $message->investor->name }}</small></p>
            </div>
        </div>
    @endforeach
</div>
@endsection
