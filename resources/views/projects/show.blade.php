@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        <p>{{ $project->description }}</p>
    </div>


    @if ($project->tasks->count())
        <div>
            <ul>
                @foreach ($project->tasks as $task)
                    <li>{{ $task->title }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p>
        <a href="/projects/{{ $project->id}}/edit">Edit</a>
    </p>

@endsection
