@extends('layouts.app')
@section('title','Edit Task')
@section('content')
@include('tasks.form',['task'=>$task])

    {{-- <form action="{{ route('tasks.update',['task'=>$task]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <label for="Long_description">Long Description</label>
            <textarea name="long_description" id="long_description">{{ $task->long_description }}</textarea>
        </div>
        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
    <a href="{{ route('tasks.index') }}">Cancel</a> --}}
@endsection