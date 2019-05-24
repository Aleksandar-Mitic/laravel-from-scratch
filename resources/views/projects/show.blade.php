@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
        <p><a href="/projects/{{ $project->id}}/edit">Edit</a></p>
    </div>




    @if ($project->tasks->count())
        <div class="box">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label class="checkbox" for="completed">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            {{ $task->title }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    {{-- add a new task --}}
    <br />
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="title">New Task</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="New task" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

    </form>

    @include('errors')

@endsection
