@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Project</a>
                @if (auth()->user()->tipo === 'investidor')
                    <a href="{{ route('projects.expressInterest', $project->id) }}" class="btn btn-success">I'm Interested</a>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection
