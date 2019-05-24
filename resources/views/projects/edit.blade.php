@extends('layout')

@section('content')

    <h1>Edit project</h1>

    <form method="POST" action="/projects/{{ $project->id    }}">
        @csrf
        @method('PATCH')

        <div class='field'>
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
            </div>
        </div>


        <div class='field'>
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" type="textarea" name="description" class="description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class='field'>
            <div class="control">
                <button type="submit" class="button is-link">Update project</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id    }}">
        @csrf
        @method('DELETE')

        <div class='field'>
            <div class="control">
                <button type="submit" class="button is-link alert">DELETE project</button>
            </div>
        </div>
    </form>


@endsection
