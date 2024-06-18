@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
