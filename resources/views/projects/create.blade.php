@extends('layout')

@section('content')

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        @csrf

        <div class='field'>
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
            </div>
        </div>


        <div class='field'>
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" type="textarea" name="description" class="description">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class='field'>
            <div class="control">
                <button type="submit" class="button is-link">Create project</button>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection
